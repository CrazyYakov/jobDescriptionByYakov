<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documents extends Migration
{
    public function up()
    {
        Schema::create('Documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameDocument');
            $table->boolean('status')->default(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('adoption_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Documents');
    }
}
