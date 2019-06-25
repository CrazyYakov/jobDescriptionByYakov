<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobDescription', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameDocument');
            $table->text('record');
            $table->string('agreed_by');
            $table->timestamp('created_at')->nullable();            
            $table->timestamp('adoption_at')->nullable();            
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('unit_id')->unsigned();            
            $table->bigInteger('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('job_positions');            
            $table->foreign('unit_id')->references('id')->on('struct_unit');

        });
    }

    public function down()
    {
        //
    }
}
