<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account_setting extends Model
{
  protected $fillable = [
      'mobile_id','user_id','psn_name','xbox_name','gender','country','zip','state','city'
  ];
}
