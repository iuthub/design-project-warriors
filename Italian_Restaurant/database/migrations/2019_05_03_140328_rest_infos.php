<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Rest_name');
            $table->string('Address');
            $table->string('Rest_number');
            $table->string('Email')->unique();
           
           
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rest_infos');
    }
}
