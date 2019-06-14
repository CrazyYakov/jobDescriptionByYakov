<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Requirement extends Migration
{
    
    public function up()
    {
        Schema::create('requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');            
            $table->text('text');
            $table->bigInteger('inst_id')->unsigned();
            $table->foreign('inst_id')->references('id')->on('institutions');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('requirement');
    }
}