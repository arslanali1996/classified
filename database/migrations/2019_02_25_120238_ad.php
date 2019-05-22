<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad',function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId');
            $table->integer('adId');
            $table->integer('price');
            $table->integer('model');
            $table->boolean('condition');
            $table->dateTime('created_at');

            $table->string('brand');
            $table->string('title',255);
            $table->longText('description');

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
        Schema::dropIfExists('ad');
    }
}
