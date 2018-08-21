<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract
{
     use Authenticatable;
     use Notifiable;

    protected $table = 'users';

    

   public function Roles()
    {

    	return $this->belongsToMany('App\Role','roles_users','user_id','role_id');
    }

    public function hasAnyRoles($roles)
    {
    	if(is_array($roles)) {
    		foreach ($roles as $key => $role) {
    			
    			if($this->hasRole($role))
    			{
    				return true;
    			} 

    		}
    	} else {
    		if($this->hasRole($role)) {
                
             if($this->Roles()->where('name', $role)->first()) {
                  
                  return true;
               } else {

                return false;
               } 	
    		}
    	}
    	
    }

    public function hasRole($roles)
    {
        if ($this->roles()->where('name', $roles)->first()) {            
            return true; 
        } 
            return false;

    }


}
