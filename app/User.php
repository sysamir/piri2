<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','user_role','user_status','confirmation_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function company(){
      return $this->hasOne('App\Companies', 'c_user_id', 'id')->with('categories');
    }

    public function person(){
      return $this->hasOne('App\Persons', 'u_user_id', 'id');
    }

    public function tender(){
      return $this->hasMany('App\Tender', 'tender_created_by_id', 'id')->where('tender_status','1');
    }

    public function isAdmin()
    {
      if ($this->user_role == 2) {
        return true;
      }else{
        return false;
      }
    }
}
