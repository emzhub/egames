<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('account_settings', function (Blueprint $table) {
        //   $table->increments('id');
        //   $table->integer('user_id');
        //   $table->string('mobile_id')->nullable();
        //   $table->string('psn_name')->nullable();
        //   $table->string('xbox_name')->nullable();
        // $table->integer('zip');
        //   $table->string('gender');
        //    $table->string('country');
        //     $table->string('state');
        //      $table->string('city');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_settings');
    }
}
