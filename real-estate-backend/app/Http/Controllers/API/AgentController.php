<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AgentController extends Controller 
{
    public function index(Request $request)
    {
        $users = User::with(['profile', 'company'])->where(function($query) {
            $query->where('user_type', 'Realtor')
                ->orWhere('user_type', 'PropertyManager');
        })->where(function($query){
            $query->where('user_type', '<>', 'Admin')
                ->orWhere('user_type', '<>', 'CompanyAdmin');
        })->get();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::with(['profile', 'company'])->find($id);
        if ($user) {
            if ($user->user_type == 'Customer') {
                return response('', 404);
            }
            return response()->json($user);
        } else {
            return response('', 404);
        }
    }

}