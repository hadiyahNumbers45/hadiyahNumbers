<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareFormMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care__form__materials', function (Blueprint $table) {
            $table->integer('material_id')->unsigned();
            $table->integer('care_form_id')->unsigned();
            $table->integer('count');



            });

            Schema::table('care__form__materials', function($table) {
                  $table->foreign('material_id')->references('id')->on('materials');
                  $table->foreign('care_form_id')->references('id')->on('care__forms');
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('care__form__materials');
    }
}
