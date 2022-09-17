<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {

        return view('/users');
    }

    public function edit(Request $request, $userid)
    {
      return view('/user-edit',['id' => $userid]);
    }
}
