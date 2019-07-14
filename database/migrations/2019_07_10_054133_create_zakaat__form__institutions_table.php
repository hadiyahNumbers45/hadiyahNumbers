<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZakaatFormInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakaat__form__institutions', function (Blueprint $table) {
        $table->integer('institution_id')->unsigned();
        $table->integer('form_id')->unsigned();
        $table->integer('count');
        $table->string('recipient');
        

        });

        Schema::table('zakaat__form__institutions', function($table) {
              $table->foreign('institution_id')->references('id')->on('institutions');
              $table->foreign('form_id')->references('form_id')->on('atonement__and__zakaat__forms');
          });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zakaat__form__institutions');
    }
}
