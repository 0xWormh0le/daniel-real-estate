<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Property;
use App\Models\User;


class FavoriteController extends Controller 
{
    use AuthenticatesUsers;

    public function index(Request $request)
    {
        $authUser = $this->guard()->user();
        if ($authUser) {
            $user = User::find($this->guard()->user()->id);
            return response()->json($user->favorites);
        } else {
            return response()->json([]);
        }
    }

    public function show($id)
    {
        
    }

    public function store(Request $request, $id)
    {
        $user = User::find($this->guard()->user()->id);
        
        $property = Property::find($id);
        if (!$property) {
            return response(json_encode([
                'success' => false,
                'message' => 'Property not found'
            ]), 404)->header('Content-Type', 'text/json');
        }

        $user->favorites()->attach($property);
        
        return response()->json(['success' => true, 'favorites' => $user->favorites]);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {
        $user = User::find($this->guard()->user()->id);

        $property = Property::find($id);
        if ($property == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Property not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $user->favorites()->detach($property);
        return response()->json(['success' => true, 'favorites' => $user->favorites]);
    }

    public function guard() 
    {
        return Auth::guard('api');
    }
}