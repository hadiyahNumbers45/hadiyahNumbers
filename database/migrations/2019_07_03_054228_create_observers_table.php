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
          $table->engine = 'InnoDB';

          $table->increments('id')->unique();
          $table->string('f_name');
          $table->string('s_name');
          $table->string('l_name');
          $table->string('email')->unique();
          $table->string('password',255);
          $table->integer('service_id')->unsigned();
          $table->integer('superviser_id')->unsigned();
          $table->integer('location_id')->unsigned();



      });
      Schema::table('observers', function($table) {
           $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('superviser_id')->references('id')->on('supervisers');
            $table->foreign('location_id')->references('id')->on('location');

        });

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
