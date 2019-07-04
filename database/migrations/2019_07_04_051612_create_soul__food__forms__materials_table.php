<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoulFoodFormsMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soul__food__forms__materials', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->timestamps();
=======
          $table->foreign('form_id')->references('form_id')->on('body__food__forms');
          $table->foreign('material_id')->references('material_id')->on('materials');
          $table->integer('count');
          $table->string('language');
          $table->timestamps();
>>>>>>> b9a2b4fd7e9c8ba335691ff20c4827afe31958aa
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soul__food__forms__materials');
    }
}
