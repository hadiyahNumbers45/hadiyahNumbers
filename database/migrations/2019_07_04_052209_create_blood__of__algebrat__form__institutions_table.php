<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodOfAlgebratFormInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood__of__algebrat__form__institutions', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->timestamps();
        });
=======
        $table->integer('institution_id')->unsigned();
        $table->integer('blood_of_algebrat_form_id')->unsigned();
        $table->integer('number_of_carcasses');
        $table->string('type');
        $table->string('name_of_delegate');

        });

        Schema::table('blood__of__algebrat__form__institutions', function($table) {
              $table->foreign('institution_id')->references('id')->on('institutions');
              $table->foreign('blood_of_algebrat_form_id')->references('id')->on('blood__of__algebrat__forms');
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
        Schema::dropIfExists('blood__of__algebrat__form__institutions');
    }
}
