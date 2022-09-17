<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\Application;
use App\Models\HistoryPayment;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    //
    public function create(Request $request) {
        $data = new Contract;

        $data->user_id = $request->input('user_id');
        $data->property_id = $request->input('property_id');
        $data->type = $request->input('type');
        $data->period = $request->input('period');
        $data->detail = $request->input('detail');
        $data->application_id = $request->input('application_id');
        $data->down_payment = $request->input('down_payment');
        $data->monthly_payment = $request->input('monthly_payment');

        $data->save();

        $data_app = Application::findOrFail($request->input('application_id'));
        $data_app->status = 1;
        $data_app->save();
        return redirect('admin/applications');
    }

    public function index() {

        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $contracts =  Contract::all();    
        } else {
            $property_ids = Property::where('user_id', $user->id)->get()->pluck('id');
            $contracts = Contract::whereIn('property_id', $property_ids)->get();
        }
        
        return View('contract.index', compact('contracts'));
    }

    public function detail($id)
    {
        $contract = Contract::findOrFail($id);
        $pay_histories = HistoryPayment::where('contract_id', $contract->id)->get();
        $data1 = [

            'contract'        => $contract,
        ];
        $data2 = [

            'pay_histories'     =>$pay_histories,
        ];
        return view('contract.detail-contract')->with($data1)->with($data2);
    }

}
