<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mobile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('mobile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mobile_number')->unsigned();
            $table->integer('user_id')->unsigned();
          
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
        //
    }
}
