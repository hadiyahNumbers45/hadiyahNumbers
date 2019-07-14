<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care__forms', function (Blueprint $table) {
          $table->engine = 'InnoDB';

          $table->date('date');
          $table->string('day');
        //  $table->string('city');
          $table->string('evaluation');
          $table->integer('nu_service_providers')->unsigned();
          $table->integer('number_of_deneficiaries')->unsigned();
          $table->string('observation');
          $table->increments('form_id')->unique();
          $table->integer('observe_id')->unsigned();
          $table->integer('service_id')->unsigned();
          $table->integer('location_id')->unsigned();

      });
      Schema::table('care__forms', function($table) {
          $table->foreign('observe_id')->references('id')->on('observers');
           $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('care__forms');
    }
}
