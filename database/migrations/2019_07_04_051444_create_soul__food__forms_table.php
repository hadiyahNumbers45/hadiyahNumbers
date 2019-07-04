<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoulFoodFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soul__food__forms', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('form_id');
            $table->date('date');
            $table->string('day');
            $table->string('city');
            $table->string('location');
            $table->string('evaluation');
            $table->integer('nu_service_providers')->unsigned();
            $table->integer('number_of_deneficiaries')->unsigned();
            $table->foreign('observe_id')->references('id')->on('observers');
            $table->foreign('service_id')->references('id')->on('services');
            $table->text('observation');
            $table->timestamps();
=======
          $table->increments('id')->unique();
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
        Schema::dropIfExists('soul__food__forms');
    }
}
