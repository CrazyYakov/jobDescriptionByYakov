<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocReq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_req', function (Blueprint $table) {
            $table->bigInteger('doc_id')->unsigned();
            $table->bigInteger('req_id')->unsigned();
            $table->foreign('doc_id')->references('id')->on('documents');
            $table->foreign('req_id')->references('id')->on('requirement');        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_req');
    }
}
