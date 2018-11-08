<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newtournament extends Model
{
   protected $fillable = [
      'tournament_id','user_id','no_players','martch_time','title'
  ];
}
