<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_token','confirmed',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
   {
       return $this->belongsToMany('App\Role','user_role','user_id','role_id');
   }  

   public function hasAnyRoles($roles)
   {
       
       if(is_array($roles))
       {
           
           foreach($roles as $role)
           {
               if($this->hasRole($role))
               {
                   return true;
               }
           }
       }

       else {
           if($this->hasRole($roles))
           {
               return true;
           }
       }

       return false;
   } 

   public function hasRole($role)
   {
       
      
       if($this->roles()->where('name',$role)->first())
       {

        return true;
       }
       return false;
   }
   function check()
   {
       echo "hello";
   }
}
