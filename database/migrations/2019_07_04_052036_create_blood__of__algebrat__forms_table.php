<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodOfAlgebratFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood__of__algebrat__forms', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->timestamps();
=======

          $table->increments('id')->unique();
          $table->string('date');
          $table->string('day');
          $table->integer('observe_id')->unsigned();
          $table->integer('count_of_agencies');
          $table->integer('service_id')->unsigned();
      });
      Schema::table('blood__of__algebrat__forms', function($table) {
          $table->foreign('observe_id')->references('id')->on('observers');
           $table->foreign('service_id')->references('id')->on('services');

>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood__of__algebrat__forms');
    }
}
