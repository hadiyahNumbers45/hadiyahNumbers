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

      


          $table->foreign('form_id')->references('form_id')->on('body__food__forms');
          $table->foreign('material_id')->references('material_id')->on('materials');
          $table->integer('count');
          $table->string('language');

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
