<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Profile;
use App\Models\Theme;
use App\Models\User;
use App\Models\Company;
use App\Models\Userlanguage;
use App\Notifications\SendGoodbyeEmail;
use App\Traits\CaptureIpTrait;
use File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Image;
use Validator;
use View;
use Webpatser\Uuid\Uuid;

use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use App\Upload;
use Illuminate\Support\Str;




class ProfilesController extends Controller
{
    protected $idMultiKey = '618423'; //int
    protected $seperationKey = '****';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function profile_validator(array $data)
    {
        return Validator::make($data, [
            'first_name'        => 'nullable|alpha',
            'last_name'         => 'nullable|alpha',
            'theme_id'          => 'required',
            'location'          => 'nullable',
            'company'           => 'nullable|max:50',
            'address'           => 'nullable|max:50',
            'city'              => 'nullable|max:50',
            'state'             => 'nullable|max:50',
            'zipcode'           => 'nullable|max:50',
            'country'           => 'nullable|max:50',
            'billing_address'   => 'nullable|max:50',
            'billing_city'      => 'nullable|max:50',
            'billing_state'     => 'nullable|max:50',
            'billing_zipcode'   => 'nullable|max:50',
            'billing_country'   => 'nullable|max:50',
            'avatar'            => '',
            'avatar_status'     => '',
        ]);
    }

    /**
     * Get a validator for an incoming update user request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name'              => 'required|max:255',
        ]);
    }

    /**
     * Fetch user
     * (You can extract this to repository method).
     *
     *
     *
     * @return mixed
     */
    public function getUserByUserid($id)
    {
        return User::with('profile')->where('id', $id)->firstOrFail();
    }

    /**
     * Display the specified resource.
     *
     * 
     *
     * @return Response
     */
    public function show($user_id)
    {
        try {
            $user = User::with('profile')->where('id', $user_id)->firstOrFail();

        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
        $companies = Company::all();

        $themes = Theme::where('status', 1)
                        ->orderBy('name', 'asc')
                        ->get();

        $currentTheme = Theme::find($user->profile->theme_id);

        // $all_languages = Language::get();
        // $cu_languages = Userlanguage::where("user_id", $user->id)->get();

        $data = [
            'user'             => $user,
            'themes'           => $themes,
            'currentTheme'     => $currentTheme,
            'companies'        => $companies
            // 'all_languages'    => $all_languages,
            // 'cu_languages'    => $cu_languages
        ];
        return view('profiles.admin.show')->with($data);

       

    }

    /**
     * /profiles/id/edit.
     *
     * @param $id
     *
     * @return mixed
     */
    public function edit($id)
    {
        try {
            $user = $this->getUserByUserid($id);
        } catch (ModelNotFoundException $exception) {
            return view('pages.status')
                ->with('error', trans('profile.notYourProfile'))
                ->with('error_title', trans('profile.notYourProfileTitle'));
        }

        $themes = Theme::where('status', 1)
                       ->orderBy('name', 'asc')
                       ->get();

        $currentTheme = Theme::find($user->profile->theme_id);

        $data = [
            'user'          => $user,
            'themes'        => $themes,
            'currentTheme'  => $currentTheme,

        ];

        return view('profiles.edit')->with($data);
    }

    /**
     * Update a user's profile.
     *
     * 
     *
     * @throws Laracasts\Validation\FormValidationException
     *
     * @return mixed
     */
    public function update($userid, Request $request)
    {
        $data = $request->formData;
        $info = [];
        foreach ($data as $key => $value) {
            $info[] = [
                $value['name'] => $value['value'],
            ];
        }
        $convertedData = call_user_func_array('array_merge', $info);

        $user = $this->getUserByUserid($userid);
        $ipAddress = new CaptureIpTrait();

        if ($request->ajax()) {
            $profile_validator = $this->profile_validator($convertedData);
        } else {
            $profile_validator = $this->profile_validator($request->all());
            $input = $request->all();
        }

        if ($profile_validator->fails()) {
            $this->throwValidationException(
                $request, $profile_validator
            );

            return redirect('profile/'.$user->id.'/edit')->withErrors($validator)->withInput();
        }

        if ($user->profile == null) {
            $profile = new Profile();
            $profile->fill($input);
            $user->profile()->save($profile);
        } else {
            if ($request->ajax()) {
                $user->profile->fill($convertedData)->save();
                $user->fill($convertedData);
            } else {
                $user->profile->fill($input)->save();
                $user->fill($input);
            }
        }

        // $user->updated_ip_address = $ipAddress->getClientIp();
        $user->save();

        // if ($request->ajax()) {
        //     $theme = Theme::find($user->profile->theme_id);

        //     $returnData = [
        //         'title'     => trans('auth.success'),
        //         'message'   => trans('profile.updateSuccess'),
        //         'themeLink' => $theme->link,
        //     ];

        //     return response()->json($returnData, 200);
        // }

        // return redirect('profile/'.$user->name.'/edit')->with('success', trans('profile.updateSuccess'));
        return response()->json(200);

        // return redirect('profile/'.$user->name)->with('success', trans('profile.updateSuccess'));
    }

    /**
     * User account admin page.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        $user = \Auth::user();
        $userid = $user->id;

        $data = [
            'free' => $user,
        ];

        return view('profiles.account')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUserAccount(Request $request, $id)
    {
        $currentUser = \Auth::user();
        $user = User::findOrFail($id);
        $emailCheck = ($request->input('email') != '') && ($request->input('email') != $user->email);
        $ipAddress = new CaptureIpTrait();

        $validator = Validator::make($request->all(), [
            'name'      => 'required|max:255',
        ]);

        $rules = [];

        if ($emailCheck) {
            $rules = [
                'email'     => 'email|max:255|unique:users',
            ];
        }

        $validator = $this->validator($request->all(), $rules);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        // $user->name = $request->input('name');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');

        if ($emailCheck) {
            $user->email = $request->input('email');
        }

        // $user->updated_ip_address = $ipAddress->getClientIp();

        $user->save();

        return redirect('profile/'.$user->id.'/edit')->with('success', trans('profile.updateAccountSuccess'));
    }


    public function updateAccount(Request $request)
    {
        $currentUser = \Auth::user();

        $user = User::findOrFail($currentUser->id);
        
        // $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $currentUser->profile->company = $request->company;
        $currentUser->profile->address = $request->address;
        $currentUser->profile->city = $request->city;
        $currentUser->profile->state = $request->state;
        $currentUser->profile->zipcode = $request->zipcode;
        $currentUser->profile->country = $request->country;
        $check_billing_address = $request->check_billing_address;
        if($check_billing_address == 'on'){
            $currentUser->profile->billing_address = $request->address;
            $currentUser->profile->billing_city = $request->city;
            $currentUser->profile->billing_state = $request->state;
            $currentUser->profile->billing_zipcode = $request->zipcode;
            $currentUser->profile->billing_country = $request->country;
        }else{
            $currentUser->profile->billing_address = $request->billing_address;
            $currentUser->profile->billing_city = $request->billing_city;
            $currentUser->profile->billing_state = $request->billing_state;
            $currentUser->profile->billing_zipcode = $request->billing_zipcode;
            $currentUser->profile->billing_country = $request->billing_country;
        }


        $file = $request->file('avatar');
        if (file_exists($file)) {
            $destinationPath =  env('APP_UPLOAD_AVATAR_PATH');
            $current_time = Carbon::now()->timestamp;
            $user->save();
    
            $original_file_extension = $file->getClientOriginalExtension();
            $avatar_url = $destinationPath. $current_time . Str::random(10) . ".$original_file_extension";
            $file->move('storage/uploads/user-avatar/', $avatar_url);

            $currentUser->profile->avatar = $avatar_url;
        }
    
        $currentUser->profile->save();
        return redirect('profile/'.$user->id)->with('success', trans('profile.updateAccountSuccess'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUserPassword(Request $request, $id)
    {
        $currentUser = \Auth::user();
        $user = User::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

        $validator = Validator::make($request->all(),
            [
                'password'              => 'required|min:6|max:20|confirmed',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'password.required'     => trans('auth.passwordRequired'),
                'password.min'          => trans('auth.PasswordMin'),
                'password.max'          => trans('auth.PasswordMax'),
            ]
        );

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if ($request->input('password') != null) {
            $user->password = bcrypt($request->input('password'));
        }

        // $user->updated_ip_address = $ipAddress->getClientIp();

        $user->save();

        return redirect('profile/'.$user->id.'/edit')->with('success', trans('profile.updatePWSuccess'));
    }

    /**
     * Upload and Update user avatar.
     *
     * @param $file
     *
     * @return mixed
     */
    public function upload()
    {
        if (Input::hasFile('file')) {
            $currentUser = \Auth::user();
            $avatar = Input::file('file');
            $filename = 'avatar.'.$avatar->getClientOriginalExtension();
            $save_path = storage_path().'/users/id/'.$currentUser->id.'/uploads/images/avatar/';
            $path = $save_path.$filename;
            $public_path = '/images/profile/'.$currentUser->id.'/avatar/'.$filename;

            // Make the user a folder and set permissions
            File::makeDirectory($save_path, $mode = 0755, true, true);

            // Save the file to the server
            Image::make($avatar)->resize(300, 300)->save($save_path.$filename);

            // Save the public image path
            $currentUser->profile->avatar = $public_path;
            $currentUser->profile->save();

            return response()->json(['path'=> $path], 200);
        } else {
            return response()->json(false, 200);
        }
    }

    /**
     * Upload and update the user profile background.
     *
     * @param $file
     *
     * @return mixed
     */
    public function uploadBackground()
    {
        if (Input::hasFile('file')) {
            $currentUser = \Auth::user();
            $user_profile_bg = Input::file('file');
            $filename = 'background.'.$user_profile_bg->getClientOriginalExtension();
            $save_path = storage_path().'/users/id/'.$currentUser->id.'/uploads/images/background/';
            $path = $save_path.$filename;
            $public_path = '/images/profile/'.$currentUser->id.'/background/'.$filename;

            // Make the user a folder and set permissions
            File::makeDirectory($save_path, $mode = 0755, true, true);

            // Save the file to the server
            // Image::make($user_profile_bg)->resize(300, 300)->save($save_path . $filename);
            Image::make($user_profile_bg)->save($save_path.$filename);

            // Save the public image path
            $currentUser->profile->user_profile_bg = $public_path;
            $currentUser->profile->save();

            return response()->json(['path'=> $path], 200);
        } else {
            return response()->json(false, 200);
        }
    }

    /**
     * Show user avatar.
     *
     * @param $id
     * @param $image
     *
     * @return string
     */
    public function userProfileAvatar($id, $image)
    {
        return Image::make(storage_path().'/users/id/'.$id.'/uploads/images/avatar/'.$image)->response();
    }

    /**
     * Show user background image.
     *
     * @param $id
     * @param $image
     *
     * @return string
     */
    public function userProfileBackgroundImage($id, $image)
    {
        return Image::make(storage_path().'/users/id/'.$id.'/uploads/images/background/'.$image)->response();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteUserAccount(Request $request, $id)
    {
        $currentUser = \Auth::user();
        $user = User::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

        $validator = Validator::make($request->all(),
            [
                'checkConfirmDelete'            => 'required',
            ],
            [
                'checkConfirmDelete.required'   => trans('profile.confirmDeleteRequired'),
            ]
        );

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if ($user->id != $currentUser->id) {
            return redirect('profile/'.$user->id.'/edit')->with('error', trans('profile.errorDeleteNotYour'));
        }

        // Create and encrypt user account restore token
        $sepKey = $this->getSeperationKey();
        $userIdKey = $this->getIdMultiKey();
        $restoreKey = config('settings.restoreKey');
        $encrypter = config('settings.restoreUserEncType');
        $level1 = $user->id * $userIdKey;
        $level2 = urlencode(Uuid::generate(4).$sepKey.$level1);
        $level3 = base64_encode($level2);
        $level4 = openssl_encrypt($level3, $encrypter, $restoreKey);
        $level5 = base64_encode($level4);

        // Save Restore Token and Ip Address
        $user->token = $level5;
        $user->deleted_ip_address = $ipAddress->getClientIp();
        $user->save();

        // Send Goodbye email notification
        $this->sendGoodbyEmail($user, $user->token);

        // Soft Delete User
        $user->delete();

        // Clear out the session
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/login/')->with('success', trans('profile.successUserAccountDeleted'));
    }

    /**
     * Send GoodBye Email Function via Notify.
     *
     * @param array  $user
     * @param string $token
     *
     * @return void
     */
    public static function sendGoodbyEmail(User $user, $token)
    {
        $user->notify(new SendGoodbyeEmail($token));
    }

    /**
     * Get User Restore ID Multiplication Key.
     *
     * @return string
     */
    public function getIdMultiKey()
    {
        return $this->idMultiKey;
    }

    /**
     * Get User Restore Seperation Key.
     *
     * @return string
     */
    public function getSeperationKey()
    {
        return $this->seperationKey;
    }
}
