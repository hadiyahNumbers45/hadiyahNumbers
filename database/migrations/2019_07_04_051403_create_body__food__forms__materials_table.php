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


          $table->integer('count');
          $table->integer('surplus');
          $table->integer('needs_of_tomorro');

              $table->integer('form_id')->unsigned();
            $table->integer('material_id')->unsigned();
        });
        Schema::table('body__food__forms__materials', function($table) {
            $table->foreign('form_id')->references('form_id')->on('body__food__forms');
             $table->foreign('material_id')->references('id')->on('materials');
  
          });
    }

    /**
     *  Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body__food__forms__materials');
    }
}
