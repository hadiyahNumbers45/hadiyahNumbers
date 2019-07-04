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
<<<<<<< HEAD
          $table->foreign('form_id')->references('form_id')->on('body__food__forms');
          $table->foreign('material_id')->references('material_id')->on('materials');
          $table->integer('count');
            $table->timestamps();
        });
=======
            $table->integer('material_id')->unsigned();
            $table->integer('care_form_id')->unsigned();
            $table->integer('count');



            });

            Schema::table('care__form__materials', function($table) {
                  $table->foreign('material_id')->references('id')->on('materials');
                  $table->foreign('care_form_id')->references('id')->on('care__forms');
              });
>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
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
