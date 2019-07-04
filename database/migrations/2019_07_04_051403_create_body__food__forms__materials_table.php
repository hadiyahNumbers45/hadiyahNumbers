<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodyFoodFormsMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body__food__forms__materials', function (Blueprint $table) {

            $table->integer('material_id')->unsigned();
            $table->integer('body_food_form_id')->unsigned();
            $table->integer('count');
            $table->integer('surplus');
            $table->integer('needs_of_tomorro');


            });

            Schema::table('body__food__forms__materials', function($table) {
                  $table->foreign('material_id')->references('id')->on('materials');
                  $table->foreign('body_food_form_id')->references('id')->on('body__food__forms');
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body__food__forms__materials');
    }
}
