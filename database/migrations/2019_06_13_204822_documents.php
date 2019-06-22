<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documents extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameDocument');            
            $table->string('agreed_by');
            $table->bigInteger('inst_id')->unsigned();
            $table->timestamp('created_at')->nullable();            
            $table->timestamp('adoption_at')->nullable();            
            $table->foreign('inst_id')->references('id')->on('institutions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
