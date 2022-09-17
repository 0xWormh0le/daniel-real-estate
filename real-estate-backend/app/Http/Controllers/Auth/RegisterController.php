<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profile;
// use App\Models\Role;
use App\Models\Company;
use App\Models\Activation;
use App\Traits\ActivationTrait;

use App\Traits\CaptchaTrait;
use App\Traits\CaptureIpTrait;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use jeremykenedy\LaravelRoles\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use ActivationTrait;
    // use CaptchaTrait;
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Auth/activate';
    public $timestamp;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->timestamp = date("Y-m-d H:i:s");
        $this->middleware('guest', [
            'except' => 'logout',
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function signup(){
        $roles =  DB::table('roles')->where('id', '!=', 1)->get();
        $companies = Company::all();
        $data = [
            'roles'             => $roles,
            'companies'        => $companies
        ];
        return view('auth.register')->with($data);
    }
    protected function validator(array $data)
    {
        // $data['captcha'] = $this->captchaCheck();

        if (!config('settings.reCaptchStatus')) {
            $data['captcha'] = true;
        }
        $data['captcha'] = true;
        return Validator::make($data,
            [
                // 'name'                  => 'required|max:255|unique:users',
                'first_name'            => '',
                'last_name'             => '',
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:20|confirmed',
                'password_confirmation' => 'required|same:password',
                // 'g-recaptcha-response'  => '',
                // 'captcha'               => 'required|min:1',
            ],
            [
                // 'name.unique'                   => trans('auth.userNameTaken'),
                // 'name.required'                 => trans('auth.userNameRequired'),
                'first_name.required'           => trans('auth.fNameRequired'),
                'last_name.required'            => trans('auth.lNameRequired'),
                'email.required'                => trans('auth.emailRequired'),
                'email.email'                   => trans('auth.emailInvalid'),
                'password.required'             => trans('auth.passwordRequired'),
                'password.min'                  => trans('auth.PasswordMin'),
                'password.max'                  => trans('auth.PasswordMax'),
                'g-recaptcha-response.required' => trans('auth.captchaRequire'),
                'captcha.min'                   => trans('auth.CaptchaWrong'),
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        $ipAddress = new CaptureIpTrait();

        $role_id = $data["usertype"];
        

        $role = Role::where('id', '=', $role_id)->first();

      

        $user = User::create([
            // 'name'              => $data['name'],
            'first_name'        => $data['first_name'],
            'last_name'         => $data['last_name'],
            'email'             => $data['email'],
            'password'          => bcrypt($data['password']),
            'token'             => str_random(64),
            'company_id'        => $data["company"],
            // 'signup_ip_address' => $ipAddress->getClientIp(),
            'activated'         => 0
            // 'activated'         => !config('settings.activation'),
        ]);
        
        // $user->socket_token = Str::random();
        $user->save();

       
      
        $acivate =  Activation::create([
            'user_id'      => $user->id,
            'token'        => $user->token,
            // 'ip_address'   => $ipAddress->getClientIp(),
            'created_at'   => $this->timestamp,
            'updated_at'   => $this->timestamp,
            
        ]);
        
        // $user->socket_token = Str::random();
        $acivate->save();

        $profile = new Profile([
            'theme_id'                     => 1,
            'location'                     => Null,
            'bio'                          => Null,
            'twitter_username'             => Null,
            'github_username'              => Null,
            'user_profile_bg'              => "/assets/img/default-user-bg.jpg",
            'avatar'                       => Null,
            'avatar_status'                => 0,
        ]);

        $profile->user_id = $user->id;
        $profile->save();

        


        $user->attachRole($role);
        echo "Please wait until your admin approve your account";
        exit();
        // $this->initiateEmailActivation($user);

        // return $user;
    }
    
}
