<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Institutions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table){

            

            $table->bigIncrements('id');
            $table->string('institut');      

            $table->bigInteger('structUnit_id')->unsigned();
            $table->bigInteger('workingPosition_id')->unsigned();
            $table->bigInteger('nameDocumnet')->unsigned();
            $table->bigInteger('loginRole_id')->unsigned();

            $table->foreign('loginRole_id')->references('id')->on('user_role');
            $table->foreign('structUnit_id')->references('id')->on('struct_unit');
            $table->foreign('workingPosition_id')->references('id')->on('working_position');
            $table->foreign('nameDocumnet')->references('id')->on('Documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}