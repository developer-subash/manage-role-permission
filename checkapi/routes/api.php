<?php

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

// Route::prefix('user')->group(function () {

    Route::post('getPaged','UserController@index')->name('api.user.getPaged');
    Route::post('Create','UserController@userCreate')->name('api.user.create');
    Route::post('Delete','UserController@userDelete')->name('api.user.delete');
    Route::post('Edit','UserController@userEdit')->name('api.user.edit');
    
    
    // });
       


// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

// });
// Route::post('register','AuthController@registerAction');
// Route::get('login','AuthController@login');
// Route::post('login','AuthController@loginAction');

// // Route::group(['middleware' => 'auth'], function(){
//     Route::prefix('admin')->group(function () {
       
//         Route::post('adminassignrole',[

//             'uses'=>'Api\RoleController@AdminAssignRoles',
//             'as'=>'assignRoleByAdmin',
//             // 'middleware' => 'roles',
//             'roles' => ['admin'],
//         ])->name('api.admin.assign.role');

//         Route::post('create/role',[
//             'uses'=>'Api\RoleController@CreateRole',
//             'as'=>'createRoleByAdmin',            
//             'roles' => ['admin'],
//         ])->name('api.admin.create.role');
       
//         // Route::get('role',[

//         //     'uses'=>'RoleController@index',
//         //     'as'=>'getAllRoles',
            
//         //     // 'roles' => ['admin'],
//         // ])->name('api.admin.roles_getPaged');
        
        
//         Route::get('role_list','RoleController@index');
            
//     });




