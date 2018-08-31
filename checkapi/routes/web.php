<?php

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
 

Route::get('admin/login','AuthController@login_index')->name('admin.login.index');
Route::get('admin/register','AuthController@register_index')->name('admin.register.index');
Route::get('account/verifyemail/{token}', 'AuthController@verify')->name('account.verify.registrations');
Route::prefix('admin')->group(function () {
   
    // Routes after admin logged in

    Route::get('/dashboard','Api\HomeController@getDashboardPage')->name('admin.dashboard.page');
    
 
});

 Route::get('check',function(){
    return view('welcome');
  });

    
    


