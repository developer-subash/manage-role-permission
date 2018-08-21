<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_user = App\Role::Where('name','user')->first(); 
    	$role_editor = App\Role::Where('name','editor')->first(); 
    	$role_admin = App\Role::Where('name','admin')->first(); 

       $user = new App\User();
       $user->name = 'subash';
       $user->email = 'subash@gmail.com';
       $user->password = 'subash123';

       $user->save();
       $user->Roles()->attach($role_user);

       $user = new App\User();
       $user->name = 'ram';
       $user->email = 'ram@gmail.com';
       $user->password = 'ram123';

       $user->save();
       $user->Roles()->attach($role_editor);


       $user = new User();
       $user->name = 'shyam';
       $user->email = 'shyam@gmail.com';
       $user->password = 'shyam123';

       $user->save();
       $user->Roles()->attach($role_admin);



    }
}
