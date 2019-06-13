<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StructUnit extends Migration
{
 
    public function up()
    {
        Schema::create('struct_unit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('struct_unit');
            $table->text('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('struct_unit');
    }
}
