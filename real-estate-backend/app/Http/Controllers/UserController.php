<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('main.pages.home');
        

    }
    public function home(){
        $user = Auth::user();
     
        return view('pages.admin.home');
        

    }
    
}
