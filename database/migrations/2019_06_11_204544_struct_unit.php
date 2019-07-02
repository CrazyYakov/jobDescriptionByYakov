<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StructUnit extends Migration
{
 
    public function up()
    {
        Schema::create('struct_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('struct_unit');
            $table->text('description');
            $table->bigInteger('inst_id')->unsigned();
            $table->foreign('inst_id')->references('id')->on('institutions');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('struct_unit');
    }
}
