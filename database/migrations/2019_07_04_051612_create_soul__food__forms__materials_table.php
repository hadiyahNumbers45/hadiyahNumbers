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

      
          $table->integer('count');
          $table->string('language');
          $table->integer('form_id')->unsigned();
          $table->integer('material_id')->unsigned();
      });
      Schema::table('soul__food__forms__materials', function($table) {
          $table->foreign('form_id')->references('form_id')->on('soul__food__forms');
           $table->foreign('material_id')->references('id')->on('materials');

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
