<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accountsetting extends Model
{
  protected $fillable = [
      'mobile_id','user_id','psn_name','xbox_name','gender','country','zip','state','city'
  ];
}
