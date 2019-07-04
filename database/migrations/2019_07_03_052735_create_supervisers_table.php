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
            $table->integer('admin_id')->unsigned();
<<<<<<< HEAD
            $table->integer('program_id')->unsigned();

        });
        Schema::table('supervisers', function($table) {
              $table->foreign('program_id')->references('id')->on('programs');
=======
            //$table->integer('program_id')->unsigned();

        });
        Schema::table('supervisers', function($table) {

              //$table->foreign('program_id')->references('id')->on('programs');
>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
              $table->foreign('admin_id')->references('id')->on('admins');
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
