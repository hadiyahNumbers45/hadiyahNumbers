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
          $table->integer('material_id')->unsigned();
          $table->integer('soul_food_form_id')->unsigned();
          $table->integer('count');
          $table->string('language');


          });

          Schema::table('soul__food__forms__materials', function($table) {
                $table->foreign('material_id')->references('id')->on('materials');
                $table->foreign('soul_food_form_id')->references('id')->on('soul__food__forms');
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
