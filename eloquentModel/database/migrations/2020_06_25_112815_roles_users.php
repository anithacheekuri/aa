<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        //
        Schema::create('roles_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('user_id');
            $table->integer('role_id');
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
