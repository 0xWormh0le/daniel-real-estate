<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Stripe\Charge;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function index() {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $applications =  Application::all();    
        } else {
            $property_ids = Property::where('user_id', $user->id)->get()->pluck('id');
            $applications = Application::whereIn('property_id', $property_ids)->get();
        }
       
        return View('application.index', compact('applications'));
    }

    public function detail($id)
    {
        $application = Application::findOrFail($id);
        
        $data = [

            'application' => $application,
            
        ];

        return view('application.detail-application')->with($data);
    }

    public function update(Request $request, $id) {
        $application = Application::findOrFail($id);

        $application->reject_reason = $request->input('reason');
        $application->status = 2;
        $application->save();
        return redirect('admin/applications');
    }
}
