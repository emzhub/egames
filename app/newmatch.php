<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newmatch extends Model
{
    protected $fillable = [
      'team_id','challange','console','games','price','level','team','time','attack'
  ];
}
