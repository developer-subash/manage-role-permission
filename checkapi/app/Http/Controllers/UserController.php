<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserInterface;
use Exception;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
class UserController extends BaseController
{
	private $user;
    public function __construct(UserInterface $iUser)
    {

    	$this->user = $iUser;
    }

    public function index(Request $request)
    {
    	try {

    	   $data = $this->user->getAllUsers();

    	   return $this->sendResponse($data,'user retrieved successfully');
    	}

    	catch(Exception $e)
    	{
    		 return $this->sendError($e->getMessage());
    	}   	
    }
    public function userCreate(Request $request)
    {
    	try {

    	$data['name'] = $request->input('name');
    	$data['email'] = $request->input('email');
    	$data['password'] = 'subash';
    	

    	// $valid = Validator::make($request->all(),[
    	// 	'name' => 'required',
    	// 	'email' => 'required|email',
    	// 	'password' => 'required',
    		
    	// ]);    		
    	// if($valid->fails())
    	// {   		
    	// }
    	$response = $this->user->createUsers($data);
    	
    	return $this->sendResponse($response,'user created successfully');
       } 
       catch(Exception $e)
       {
       	return $this->sendError($e->getMessage()); 
       } 
    }

    public function userDelete(Request $request)
    {

    	try {
    		$user_email = $request->input('email');    		    	
    		$result = $this->user->deleteUser($user_email);
    		return $this->sendResponse($result,'User Deleted Permanently');
    	}
    	catch(Exception $e)
    	{
    		return $this->sendError($e->getMessage());
    	}
    }

     public function userEdit(Request $request)
    {

    	try {
    		$user_email = $request->input('user_email'); 
    		
    		$result = $this->user->editUser($user_email);
    		if(!empty($result))
    		return $this->sendResponse($result,'get User ' .$user_email . 'data');
    	}
    	catch(Exception $e)
    	{
    		return $this->sendError($e->getMessage());
    	}
    }
}
