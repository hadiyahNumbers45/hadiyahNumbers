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
            $table->integer('count');
            $table->integer('form_id')->unsigned();
            $table->integer('material_id')->unsigned();
        });
        Schema::table('hospitable__form__materials', function($table) {
            $table->foreign('form_id')->references('form_id')->on('hospitable__forms');
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
        Schema::dropIfExists('hospitable__form__materials');
    }
}
