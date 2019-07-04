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
<<<<<<< HEAD
            $table->bigIncrements('id');
=======
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
>>>>>>> b9a2b4fd7e9c8ba335691ff20c4827afe31958aa
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
        Schema::dropIfExists('care__forms');
    }
}
