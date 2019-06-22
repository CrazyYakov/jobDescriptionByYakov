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
            $table->bigInteger('unit_id')->unsigned();
            $table->bigInteger('doc_id')->unsigned();
            $table->bigInteger('req_id')->unsigned();
            $table->bigInteger('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('job_positions');
            $table->foreign('doc_id')->references('id')->on('documents');
            $table->foreign('req_id')->references('id')->on('requirement');
            $table->foreign('unit_id')->references('id')->on('struct_unit');
            
        });
    }

    public function down()
    {
        //
    }
}
