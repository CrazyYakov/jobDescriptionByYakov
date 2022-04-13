<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeReqTable extends Migration
{
    
    public function up()
    {
        Schema::create('typeReq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameType');
            $table->text('description');
            $table->bigInteger('inst_id')->unsigned();
            $table->foreign('inst_id')->references('id')->on('institutions');            
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
