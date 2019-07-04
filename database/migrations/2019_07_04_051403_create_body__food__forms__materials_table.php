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
<<<<<<< HEAD
            $table->bigIncrements('id');
=======
          $table->foreign('form_id')->references('form_id')->on('body__food__forms');
          $table->foreign('material_id')->references('material_id')->on('materials');
          $table->integer('count');
          $table->integer('surplus');
          $table->integer('needs_of_tomorro');


>>>>>>> b9a2b4fd7e9c8ba335691ff20c4827afe31958aa
            $table->timestamps();
        });
    }

    /**
<<<<<<< HEAD
     * Reverse the migrations.
     *
=======
     *  Reverse the migrations.
     * تيسسسسسسسسسسسسسسسسسسسسسسسسسست
>>>>>>> b9a2b4fd7e9c8ba335691ff20c4827afe31958aa
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body__food__forms__materials');
    }
}
