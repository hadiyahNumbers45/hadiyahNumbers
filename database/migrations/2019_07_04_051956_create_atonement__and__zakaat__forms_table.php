<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtonementAndZakaatFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atonement__and__zakaat__forms', function (Blueprint $table) {

          $table->increments('id')->unique();
          $table->string('date');
          $table->string('day');
          $table->integer('observe_id')->unsigned();
          $table->integer('count');
          $table->integer('service_id')->unsigned();
      });
      Schema::table('atonement__and__zakaat__forms', function($table) {
          $table->foreign('observe_id')->references('id')->on('observers');
           $table->foreign('service_id')->references('id')->on('services');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atonement__and__zakaat__forms');
    }
}
