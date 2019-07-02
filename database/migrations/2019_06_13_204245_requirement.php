<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Requirement extends Migration
{
    
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');            
            $table->text('text');            
            $table->bigInteger('typeReq_id')->unsigned();
            $table->foreign('typeReq_id')->references('id')->on('typeReq');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('requirement');
    }
}