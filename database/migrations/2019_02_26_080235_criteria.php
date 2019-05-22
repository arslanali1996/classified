<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Criteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('criteria',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('adId');
            $table->boolean('condition');
            $table->string('brand');
            //$table->string('brand');

            $table->foreign('adId')->references('id')->on('ad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('criteria');
    }
}
