<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;

class BaseControllerSecure extends BaseController
{
       private $user; 
       private $logged_user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = new \StdClass;

            $this->logged_user = Auth::user();
           
            if ($this->logged_user != null) {
                $this->user->email = $this->logged_user->email;
                $this->user->id = $this->logged_user->id;
                $this->user->name = $this->logged_user->name;
  
             
            }

            return $next($request);
        });
    }
   
  

}
