<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisers', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('f_name');
            $table->string('s_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->string('password',255);
            //$table->integer('program_id')->unsigned();
              //$table->foreign('program_id')->reference('id')->on('programs');
            //  $table->integer('admin_id')->unsigned();
            //  $table->foreign('admin_id')->reference('id')->on('admins');;


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisers');
    }
}
