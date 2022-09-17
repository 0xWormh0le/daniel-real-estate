<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Application;
use App\Models\Contract;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller 
{
    public function store(Request $request)
    {
        $app = new Application;
        $user = $this->guard()->user();
        if ($user) {
            $app->user_id = $this->guard()->user()->id;
            $app->property_id = $request->input('property_id');
            $app->content = $request->input('content');
            $app->address = $request->input('address');
            $app->city = $request->input('city');
            $app->state = $request->input('state');
            $app->zip = $request->input('zip');
            $app->rent_or_buy = $request->input('rent_or_buy');
            $app->how_long_live = $request->input('how_long_live');
            $app->phone_number = $request->input('phone');
            $app->email = $request->input('email');
            $app->job = $request->input('job');
            $app->job_city = $request->input('job_city');
            $app->job_state = $request->input('job_state');
            $app->how_long_work = $request->input('how_long_work');
            $app->monthly_income = $request->input('monthly_income');
            $app->pet = $request->input('pet');
            $app->sign = $request->input('sign');
            $app->period = $request->input('period');
            $app->status = 0; // 0: pending, 1: accepted, 2: rejected
            $app->pet_count = $request->input('pet_count');
            $app->save();
            return response()->json([
                'success' => true,
                'application' => $app
            ]);
        } else {
            return response('', 404);
        }

    }

    public function cancelRecurring($id)
    {
        $contract = Contract::find($id);

        if ($contract) {
            $contract->recurring = 0;
            $contract->save();
        }
    }

    public function guard() 
    {
        return Auth::guard('api');
    }
}