<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use GuzzleHttp\Client;
use Hash;
use Validator;
use Illuminate\Auth\Events\Registered;
use Mail;
use Mail\EmailVerifications;
use Auth;
use App\Jobs\SendVerificationEmail;

class AuthController extends Controller
{
    private $authenticationkey;
    private $successkey = 200;
    private $validationerrorkey = 401;

    private $user; 
    public function __construct(User $user)
    {
        $this->users = $user;
    }

    public function login_index()
    {
       
        return view('admin.login');
    }
    public function register_index()
    {
       
        return view('admin.register');
    }

    public function loginAction(Request $request)
    {
   
      $credentials = $request->only('email', 'password');
      
      if(Auth::attempt($credentials)) 
      {
        
        $data['user'] =  Auth::user();
        $data['token'] =  $data['user']->createToken('MyApp')->accessToken;

        return response()->json(['data' => $data], $this->successkey);
      }
      else {
        return response()->json(['success' => 'credentais not match'], 404);
      }

      return response()->json(['success' => 'credentais not match'], 404);                
    }

    public function suabsh()
    {
        dd(Auth::user());
    }

    public function register()
    {
        return view('register');
    }

    public function registerAction(Request $request)
    {

        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('password'));
        $data['email_token'] = base64_encode($data['email']);
            
        $user =   $this->users->create($data);
        $user->roles()->attach(Role::where('name','student')->first());
        $this->sendEmailVerifications($user);
           
        $http = new Client;       

        $response = $http->post(url(('oauth/token')), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => 2,
                'client_secret' => 'k0AO5VAHD399N0asfapDnHFgFLoUP8ow0VsPRzUr',
                 'username' => $request->input('email'),   
                 'password' => $request->input('password'),  
                'scope' => '',
            ],
        ]);

        $this->authenticationkey = $user->createToken('MyApp')->accessToken;
        $data['token'] =   $this->authenticationkey;   
        return response()->json(['data' => $data], $this->successkey);
        // return response([ 'auth' => json_encode((string) $response->getBody(), true),'user' => $user]);
    }

       function sendEmailVerifications($user)
       {

       

        Mail::send('welcome', ['title' => 'hello this is user registered Email'], function ($message) use ($user)
        {

            // $message->from('me@gmail.com', 'Christian Nwamba');
           
            $message->to($user->email);

        });

        // return response()->json(['message' => 'Request completed']);
   


        // dispatch(new SendVerificationEmail($user));
        //  event(new Registered($user));
        //  dispatch(new SendVerificationEmail($user));
       } 

    public function dashboard()
    {
        
        return view('dashboard');
    }
    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
            $user->confirmed = 1;
            if($user->save()){
            return view('common.email.emailconfirm',[‘user’=>$user]);
    }
}
}
