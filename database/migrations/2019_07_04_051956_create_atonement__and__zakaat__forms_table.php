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
<<<<<<< HEAD
          $table->increments('id')->unique();
          $table->string('date');
          $table->string('day');
          $table->integer('observe_id')->unsigned();
          $table->integer('count')
          $table->integer('service_id')->unsigned();
      });
      Schema::table('atonement__and__zakaat__forms', function($table) {
          $table->foreign('observe_id')->references('id')->on('observers');
           $table->foreign('service_id')->references('id')->on('services');
=======
            $table->bigIncrements('id');
            $table->timestamps();
>>>>>>> d3f4f3d0f49b14c392379f36b49738cace24f0fc
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
