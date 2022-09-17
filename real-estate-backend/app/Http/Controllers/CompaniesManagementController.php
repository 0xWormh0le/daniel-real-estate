<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\Company;
use App\Models\UserRole;
use App\Traits\CaptureIpTrait;
use App\Models\Activation;
use Auth;
use Illuminate\Http\Request;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;
use Illuminate\Support\Facades\DB;


use File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Image;
use View;
use Webpatser\Uuid\Uuid;

use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use App\Upload;
use Illuminate\Support\Str;


class CompaniesManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $timestamp;

    public function __construct()
    {
        $this->middleware('auth');
        $this->timestamp = date("Y-m-d H:i:s");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $companies = Company::all();
        $pageTitle = "";
       
        return View('companymanagement.show-companies', compact('pageTitle', 'companies'));
    }




    public function companies()
    {
        
        $companies = Company::all();
        $pageTitle = "";
       
        return View('companymanagement.show-companies', compact('pageTitle', 'companies'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
       
            $data = [
                'roles' => $roles,
            ];
            return view('companymanagement.create-company')->with($data);
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $main_user = \Auth::user();
        $ipAddress = new CaptureIpTrait();
        $validator = Validator::make($request->all(),
            [
                'name'                  => 'required|max:255|unique:users',               
                'email'                 => 'required|email|max:255|unique:users',             
                
            ],
            [
                // 'name.unique'         => trans('auth.userNameTaken'),
                // 'name.required'       => trans('auth.userNameRequired'),               
                'email.required'      => trans('auth.emailRequired'),
                'email.email'         => trans('auth.emailInvalid'),               
               
            ]
        );

        
           

            $company = Company::create([
                    'name'             => $request->input('name'),
                    'phone1'       => $request->input('phone1'),
                    'phone2'        => $request->input('phone2'),
                    'email'            => $request->input('email'),
                    'fax'            => $request->input('fax'),
                    'city'            => $request->input('city'),
                    'state'            => $request->input('state'),
                    'zip'            => $request->input('zip'),
                    'address1'            => $request->input('address1'),
                    'address2'            => $request->input('address2'),
                    'description'            => $request->input('description'),
                    'about_us'            => $request->input('about_us'),
                    'created_at'       => $this->timestamp,
                    'updated_at'       => $this->timestamp
                ]);

                $file = $request->file('avatar');
           
                if (file_exists($file)) {
                    $destinationPath =  env('APP_UPLOAD_LOGO_PATH');
                    $current_time = Carbon::now()->timestamp;
                    // $user->save();
            
                    $original_file_extension = $file->getClientOriginalExtension();
                    $avatar_url = $destinationPath. $current_time . Str::random(10) . ".$original_file_extension";
                    $file->move('storage/uploads/company-logo/', $avatar_url);
    
                    $company->logo = $avatar_url;
                }
            $company->save();
       
          
            
            return redirect('admin/companies')->with('success');
        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $company = Company::findOrFail($id);
        

        $data = [

            'company'        => $company,
            
        ];

        return view('companymanagement.edit-company')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $company = Company::find($id);
        $validator = Validator::make($request->all(), [
                'name'     => 'required|max:255',
                'email'    => 'email|max:255|unique:users'
            ]);
       
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->address1= $request->input('address1');
        $company->address2= $request->input('address2');
        $company->phone1= $request->input('phone1');
        $company->phone2= $request->input('phone2');
        $company->fax= $request->input('fax');
        $company->city= $request->input('city');
        $company->state= $request->input('state');
        $company->zip= $request->input('zip');
        $company->description= $request->input('description');
        $company->about_us= $request->input('about_us');

        $file = $request->file('avatar');
        if (file_exists($file)) {
            $destinationPath =  env('APP_UPLOAD_LOGO_PATH');
            $current_time = Carbon::now()->timestamp;
            // $user->save();
    
            $original_file_extension = $file->getClientOriginalExtension();
            $avatar_url = $destinationPath. $current_time . Str::random(10) . ".$original_file_extension";
            $file->move('upload/company-logo/', $avatar_url);

            $company->logo = $avatar_url;
        }
        

        $company->save();
        
        $companies = Company::all();
        $pageTitle = "";
       
        return View('companymanagement.show-companies', compact('pageTitle', 'companies'));
        // return redirect('admin/companies')->with('success');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $currentUser = Auth::user();
        $company = Company::findOrFail($id);
        
        $company->delete();

        return redirect('admin/companies')->with('success', trans('companymanagement.deleteSuccess'));

    }
}
