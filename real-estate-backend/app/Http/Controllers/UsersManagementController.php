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


class UsersManagementController extends Controller
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
        $users = User::all();
        $roles = Role::all();
        $companies = Company::all();
        $pageTitle = "";
       
        return View('usersmanagement.show-users', compact('users', 'roles', 'pageTitle', 'companies'));
    }




    public function users()
    {
        
        // $current_user = \Auth::user();
    
        $users = User::cu_users();
        $roles = Role::all();
        $role_users = UserRole::all();
        $companies = Company::all();
      
        // print_r($users);
        // exit();
        $pageTitle = "user";
        return View('usersmanagement.show-users', compact('users', 'roles',  'pageTitle', 'companies', 'role_users'));
    }
    public function showBySelection(Request $request){
        $company_id =  $request['company_id'];
        $users = User::where('company_id', $company_id)->get();
        $roles = Role::all();
        $role_users = UserRole::all();
        $companies = Company::all();
      
        // print_r($users);
        // exit();
        $pageTitle = "user";
        return View('usersmanagement.show-users', compact('users', 'roles',  'pageTitle', 'companies', 'role_users'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $companies = Company::all();
       
            $data = [
                'roles' => $roles,
                'companies' => $companies
            ];
            return view('usersmanagement.create-user')->with($data);
       

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
       
        $ipAddress = new CaptureIpTrait();
        $validator = Validator::make($request->all(),
            [
                // 'name'                  => 'required|max:255|unique:users',
                'first_name'            => '',
                'last_name'             => '',
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:20|confirmed',
                'password_confirmation' => 'required|same:password',
                
            ],
            [
                // 'name.unique'         => trans('auth.userNameTaken'),
                // 'name.required'       => trans('auth.userNameRequired'),
                'first_name.required' => trans('auth.fNameRequired'),
                'last_name.required'  => trans('auth.lNameRequired'),
                'email.required'      => trans('auth.emailRequired'),
                'email.email'         => trans('auth.emailInvalid'),
                'password.required'   => trans('auth.passwordRequired'),
                'password.min'        => trans('auth.PasswordMin'),
                'password.max'        => trans('auth.PasswordMax'),
               
            ]
        );   
        
           
            $role = Role::where('id', (int)$request->user_type)->first();
            $user = User::create([
                    // 'name'             => $request->input('name'),
                    'first_name'       => $request->input('first_name'),
                    'last_name'        => $request->input('last_name'),
                    'email'            => $request->input('email'),
                    'company_id'       => $request->company,
                    'password'         => bcrypt($request->input('password')),
                    'token'            => str_random(64),
                    // 'admin_ip_address' => $ipAddress->getClientIp(),
                    'activated'        => 1,
                    'created_at'       => $this->timestamp,
                    'updated_at'       => $this->timestamp
                ]);

      


            $user->save();
            $user->attachRole($role);




            $profile = new Profile([
                'theme_id'                     => 1,
                'location'                     => Null,
                'bio'                          => Null,
                'twitter_username'             => Null,
                'github_username'              => Null,
                'user_profile_bg'              => "/assets/img/default-user-bg.jpg",
                'avatar_status'                => 0,
                'created_at'       => $this->timestamp,
                'updated_at'       => $this->timestamp
            ]);
    
            $profile->user_id = $user->id;
            

            $company_name = Company::where('id', $request->company)->pluck('name')->first();

            $profile->company = $company_name;
            $profile->address = $request->address;
            $profile->city = $request->city;
            $profile->state = $request->state;
            $profile->zipcode = $request->zipcode;
            $profile->country = $request->country;
            $check_billing_address = $request->check_billing_address;
            
            if($check_billing_address == 'on'){
                $profile->billing_address = $request->address;
                $profile->billing_city = $request->city;
                $profile->billing_state = $request->state;
                $profile->billing_zipcode = $request->zipcode;
                $profile->billing_country = $request->country;
            }else{
                $profile->billing_address = $request->billing_address;
                $profile->billing_city = $request->billing_city;
                $profile->billing_state = $request->billing_state;
                $profile->billing_zipcode = $request->billing_zipcode;
                $profile->billing_country = $request->billing_country;
            }


            $file = $request->file('avatar');
           
            if (file_exists($file)) {
                $destinationPath =  env('APP_UPLOAD_AVATAR_PATH');
                $current_time = Carbon::now()->timestamp;
                // $user->save();
        
                $original_file_extension = $file->getClientOriginalExtension();
                $avatar_url = $destinationPath. $current_time . Str::random(10) . ".$original_file_extension";
                $file->move('upload/profile/', $avatar_url);

                $profile->avatar = $avatar_url;
            }
        
            $profile->save();
       
         
            
            return redirect('admin/users')->with('success', trans('usersmanagement.createSuccess'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('usersmanagement.show-user', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current_user = \Auth::user();
        $user = User::findOrFail($id);
        $roles = Role::all();
        $companies = Company::all();

        $current_role = UserRole::where('user_id', $user->id)->pluck('role_id')->first();

        $data = [

            'user'        => $user,
            'roles'       => $roles,
            'companies'     => $companies,
            'isAdmin' => $current_user->isAdmin(),
            'current_role' => $current_role
        ];

        return view('usersmanagement.edit-user')->with($data);
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
       
        $user = User::find($id);

        $emailCheck = ($request->input('email') != '') && ($request->input('email') != $user->email);
        $ipAddress = new CaptureIpTrait();
        // DB::table('role_user')->where('user_id', $user->id)->update(['role_id' => $request->input('role')]);
        
        if ($emailCheck) {
            $validator = Validator::make($request->all(), [
                    'name'     => 'required|max:255',
                    'email'    => 'email|max:255|unique:users',
                    'password' => 'present|confirmed|min:6',
                ]);
        } else {
            $validator = Validator::make($request->all(), [
                    'name'     => 'required|max:255',
                    'password' => 'nullable|confirmed|min:6',
                ]);
        }
        $role = Role::where('id', (int)$request->user_type)->first();
      
            // $user->name = $request->input('name');

            if ($emailCheck) {
                $user->email = $request->input('email');
            }

            if ($request->input('password') != null) {
                $user->password = bcrypt($request->input('password'));
            }


            //$user->activated = 1;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            // $user->name = $request->name;
            $user->company_id = $request->company;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            // $user->updated_ip_address = $ipAddress->getClientIp();

           

            $user->save();
            $user->attachRole($role);
            $company_name = Company::where('id', $request->company)->pluck('name')->first();
            $user->profile->company = $company_name;
            $user->profile->address = $request->address;
            $user->profile->city = $request->city;
            $user->profile->state = $request->state;
            $user->profile->zipcode = $request->zipcode;
            $user->profile->country = $request->country;
            $check_billing_address = $request->check_billing_address;

            if($check_billing_address == 'on'){
                $user->profile->billing_address = $request->address;
                $user->profile->billing_city = $request->city;
                $user->profile->billing_state = $request->state;
                $user->profile->billing_zipcode = $request->zipcode;
                $user->profile->billing_country = $request->country;
            }else{
                $user->profile->billing_address = $request->billing_address;
                $user->profile->billing_city = $request->billing_city;
                $user->profile->billing_state = $request->billing_state;
                $user->profile->billing_zipcode = $request->billing_zipcode;
                $user->profile->billing_country = $request->billing_country;
            }


            $file = $request->file('avatar');
            if (file_exists($file)) {
                $destinationPath =  env('APP_UPLOAD_AVATAR_PATH');
                $current_time = Carbon::now()->timestamp;
                // $user->save();
        
                $original_file_extension = $file->getClientOriginalExtension();
                $avatar_url = $destinationPath. $current_time . Str::random(10) . ".$original_file_extension";
                $file->move('upload/profile/', $avatar_url);

                $user->profile->avatar = $avatar_url;
            }
        
            $user->profile->save();
            
            return back()->with('success', trans('usersmanagement.updateSuccess'));
        
    }
    public function update_status(Request $request){
        $user_id = $request['user_id'];
        $user =  User::find($user_id);
        $user->activated = !($user->activated);
        $user->save();
        return back()->with('success', trans('usersmanagement.updateSuccess'));
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
        $user = User::findOrFail($id);
        // $ipAddress = new CaptureIpTrait();

        // if ($user->id != $currentUser->id) {
            // $user->deleted_ip_address = $ipAddress->getClientIp();
            // $user->save();
        // }
        $user->delete();

        return redirect('admin/users')->with('success', trans('usersmanagement.deleteSuccess'));

        // return back()->with('error', trans('usersmanagement.deleteSelfError'));
    }
}
