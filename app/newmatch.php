<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newmatch extends Model
{
    protected $fillable = [
      'match_id','user_id','challange','console','games','price','level','team','time','legacy_defending'
  ];
}
