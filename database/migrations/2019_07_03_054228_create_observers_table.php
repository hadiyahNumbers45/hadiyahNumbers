<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observers', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('f_name');
          $table->string('s_name');
          $table->string('l_name');
          $table->string('location');
          $table->string('email')->unique();
          $table->string('password',255);
<<<<<<< HEAD
          $table->integer('program_id')->unsigned();
=======
         $table->integer('program_id')->unsigned();
>>>>>>> 95c78de2909b7e32142a949b2a230f3efc486687
          $table->integer('superviser_id')->unsigned();
          $table->foreign('program_id')->references('id')->on('programs');
          $table->foreign('superviser_id')->references('id')->on('supervisers');

      });
<<<<<<< HEAD
=======
      Schema::table('observers', function($table) {
           $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('superviser_id')->references('id')->on('supervisers');
        });

>>>>>>> 95c78de2909b7e32142a949b2a230f3efc486687
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observers');
    }
}
