<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Config;

use App\Models\User;
use App\Models\HistoryPayment;
use App\Models\Property;
use App\Models\Contract;

class StripeController extends Controller
{
    public function charge(Request $request)
    {
        $user = auth('api')->user();
        $input = $request->all();
        $property_id = $input['property_id'];
        $token = $input['stripeToken'];
        $recurring = $request->input('recurring');

        $contract = Contract::where('property_id', $property_id)->where('user_id', $user->id)->first();
        
        if (!$contract) {
            return;
        }

        if ($contract->current_payment_times == 0) {
            $amount = $contract->down_payment;
        } else { 
            $amount = $contract->monthly_payment;
        }

        try {
            Stripe::setApiKey(Config::get('services.stripe.secret'));
            if (is_null($contract->stripe_id)) {
                $customer = Customer::create(array(
                    'email' => $user->email,
                    'source' => $token
                ));
                $contract->stripe_id = $customer->id;
            }
            
            $charge = Charge::create(array(
                'customer' => $contract->stripe_id,
                'amount' => $amount * 100,
                'currency' => 'usd'
            ));
            
            $contract->current_payment_times++;
            
            $history = new HistoryPayment;
            $history->contract_id = $contract->id;
            $history->paid_amount = $amount;
            $history->save();

            if (!is_null($recurring)) {
                $contract->recurring = $recurring === 'on' ? 1 : 0;
            }
            $contract->save();

            // return  back()->with('success', 'Charge successful!')->with('payment_method', 'stripe');
            // return redirect()->route('thankyou');
            return back();
            // return  back()->with('success', 'Charge successful!')->with('payment_method', 'stripe');
        } catch (\Exception $ex) {
            return $ex->getMessage();
            // return back()->with('stripe-message', $ex->getMessage())->with('payment_method', 'stripe');
        }
    }

    public function cancel(Request $request)
    {
        auth()->user()->subscription('main')->cancelNow();
        auth()->user()->status = 'pending';
        auth()->user()->save();
        return view('dashboard.home');
    }
}
