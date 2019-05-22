<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Saved extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved',function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId');
            $table->integer('adId');

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('adId')->references('id')->on('ad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saved');
    }
}
