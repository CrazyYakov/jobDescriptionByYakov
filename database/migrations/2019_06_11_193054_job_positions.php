<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobPositions extends Migration
{
    
    public function up()
    {
        Schema::create('job_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->bigInteger('inst_id')->unsigned();
            $table->foreign('inst_id')->references('id')->on('institutions');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_positions');
    }
}
