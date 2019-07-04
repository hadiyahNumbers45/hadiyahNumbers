<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitableFormMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitable__form__materials', function (Blueprint $table) {
          $table->integer('material_id')->unsigned();
          $table->integer('hospitable_form_id')->unsigned();
          $table->integer('count');



          });

          Schema::table('care__form__materials', function($table) {
                $table->foreign('material_id')->references('id')->on('materials');
                $table->foreign('hospitable_form_id')->references('id')->on('hospitable__forms');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitable__form__materials');
    }
}
