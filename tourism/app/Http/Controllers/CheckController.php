<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{

    public function apartment()
    {


    	return view('apartment');
    }

    public function units()
    {

    	return view('role');
    }
}
