<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
  protected $fillable = [
      'u_name', 'u_gender', 'u_birth','u_phone','u_user_id',
  ];
}
