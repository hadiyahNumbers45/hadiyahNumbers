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

            $table->bigIncrements('id');

          $table->foreign('form_id')->references('form_id')->on('body__food__forms');
          $table->foreign('material_id')->references('material_id')->on('materials');
          $table->integer('count');
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
        Schema::dropIfExists('hospitable__form__materials');
    }
}
