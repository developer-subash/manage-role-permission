<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','student')->first();
        $role_admin = Role::where('name','admin')->first();
        $role_teacher = Role::where('name','teacher')->first();

        $obj1 = new User();
        $obj1->name = 'subash';
        $obj1->email = 'subashsharma525@gmail.com';
        $obj1->password = Hash::make('subash');
        $obj1->save();
        $obj1->roles()->attach($role_user);

        $obj2 = new User();
        $obj2->name = 'test';
        $obj2->email = 'testpandey990@gmail.com';
        $obj2->password = Hash::make('test');
        $obj2->save();
        $obj2->roles()->attach($role_admin);

        $obj3 = new User();
        $obj3->name = 'suvash';
        $obj3->email = 'subashsharma185@gmail.com';
        $obj3->password = Hash::make('subash');
        $obj3->save();
        $obj3->roles()->attach($role_teacher);
        
    }
}
