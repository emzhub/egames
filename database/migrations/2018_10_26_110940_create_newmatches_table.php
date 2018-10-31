<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewmatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newmatches', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('match_id');
              $table->integer('team_id');
              $table->string('challange');
              $table->integer('console');
              $table->integer('games');
              $table->string('price');
              $table->string('level');
              $table->integer('team');
              $table->string('time');
              $table->integer('attack');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newmatches');
    }
}
