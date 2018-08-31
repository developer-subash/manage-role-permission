<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role_user = new Role();
        $role_user->name = 'student';
        $role_user->description = 'this is the role of Student';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'teacher';
        $role_author->description = 'this is the Author Name';
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'this is the Admin Role';
        $role_admin->save();



    }
}
