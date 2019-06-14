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
            $table->boolean('status')->default(false);
            $table->string('agreed_by');
            $table->timestamp('created_at')->nullable();            
            $table->timestamp('adoption_at')->nullable();
            $table->bigInteger('unit_id')->unsigned();
            $table->bigInteger('job_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('struct_unit');
            $table->foreign('job_id')->references('id')->on('job_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
