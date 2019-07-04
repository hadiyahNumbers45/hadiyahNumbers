<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionOfTheCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption__of__the__committees', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->timestamps();
        });
=======
          $table->integer('blood_of_algebrat_form_id')->unsigned();
          $table->string('name');
          $table->string('observation');

        });
        Schema::table('adoption__of__the__committees', function($table) {

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
        Schema::dropIfExists('adoption__of__the__committees');
    }
}
