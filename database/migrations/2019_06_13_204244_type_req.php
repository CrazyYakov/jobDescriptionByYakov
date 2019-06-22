<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypeReq extends Migration
{
    
    public function up()
    {
        Schema::create('typeReq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameType');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
