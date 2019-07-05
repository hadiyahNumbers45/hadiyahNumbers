<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodyFoodFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body__food__forms', function (Blueprint $table) {
            $table->date('date');
            $table->string('day');
            $table->string('city');
            $table->string('location');
            $table->string('evaluation');
            $table->integer('nu_service_providers')->unsigned();
            $table->integer('number_of_deneficiaries')->unsigned();
            $table->increments('form_id')->unique();
            $table->integer('observe_id')->unsigned();
            $table->integer('service_id')->unsigned();
        });
        Schema::table('body__food__forms', function($table) {
            $table->foreign('observe_id')->references('id')->on('observers');
             $table->foreign('service_id')->references('id')->on('services');
  
          });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body__food__forms');
    }
}
