<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'organization_name', 'category', 'email', 'password', 'account_type', 'state', 'city', 'zipcode', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function roles(){
    //     return $this->belongsToMany('App\Role');
    // }

    // public function hasAnyRole($roles){
    //    if(is_array($roles)){
    //      foreach($roles as $role){
    //         if($this->hasRole($role)){
    //             return true;
    //         }
    //      }
    //    }else{
    //        if($this->hasRole($roles)){
    //             return true;
    //        }
    //    }
    //            return false;
    // }

    // public function hasRole($role){
    //     if($this->roles()->where('name', $role)->first()){
    //        return true;
    //     }
    // }
    // 
     public function tickets(){
        return $this->hasMany('App\Donatedtickets');
    }

   

}
