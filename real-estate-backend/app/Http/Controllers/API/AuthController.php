<?php

namespace App\Http\Controllers\API;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Activation;
use App\Traits\CaptureIpTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use JWTAuth;

use App\Logic\User\UserRepository;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $repository;

    public function __construct(UserRepository $repo)
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->repository = $repo;
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return response(json_encode([
                'success' => false,
                'message' => 'Too many requests'
            ]), 429)->header('Content-Type', 'text/json');
        }

        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            $user = $this->guard()->user();
            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
            return $this->respondWithToken($token);
        } else {
            return response(json_encode([
                'success' => false,
                'message' => 'No such a user'
            ]), 404)->header('Content-Type', 'text/json');
        }
    }

    public function register(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,
            [
                // 'name'                  => 'required|max:255|unique:users',
                'first_name'            => 'required|max:255',
                'last_name'             => 'required|max:255',
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:20|confirmed',
                'password_confirmation' => 'required|same:password'
            ]
        );

        if ($validator->fails()) {
            return response(json_encode([
                'success' => false,
                'message' => 'Bad request'
            ]), 400)->header('Content-Type', 'text/json');
        }

        $input['user_type'] = 'Customer';

        $user = $this->repository->storeUser($input);
        return response()->json([
            'success' => true,
            'user' => $user
        ]);
    }

    public function refresh() 
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    public function me()
    {
        return response()->json($this->guard()->user());
    }

    public function check()
    {
        return response()->json(['success' => true]);
    }

    protected function respondWithToken($token) 
    {
        return response()->json([
            'success' => true,
            'payload' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => $this->guard()->factory()->getTTL() * 60
            ]
        ]);
    }

    public function guard() 
    {
        return Auth::guard('api');
    }
}