<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Role extends Migration
{
    
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameRole')->unique();           
            $table->text('description');  
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
