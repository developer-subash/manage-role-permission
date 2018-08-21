<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class UserController extends Controller
{
    public function home(Request $request)
    {
        dd($request->route()->getAction());
    	return view('welcome');
    }

   public function loginman()
    {

    	return view('login');
    }

    function loginAction(Request $request)
    {
    	$credentials = $request->only('email', 'password');
        $results = DB::select( DB::raw("SELECT * FROM users WHERE email = 'ram@gmail.com'"));

        dd(Auth());
        // $user = DB::table('users')->where('email', 'ram@gmail.com')->first();
     if (Auth::attempt($credentials))
     {


        echo "string";
      }
      echo "suabsh";
      dd(Auth::user());
        // return redirect()->back()->with('loginfail','the provided credential is not efficient');



    	// if(Auth::attempt(['email' => 'ram@gmail.com','password' => 'ram123']))
    	// {
    	//  echo "string";
    	// }
    	//  echo "subash";

    }
}
