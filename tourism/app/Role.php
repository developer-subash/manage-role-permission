<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function Users()
    {

    	return $this->belongsToMany('App\User','roles_users','role_id','user_id');
    }
}
