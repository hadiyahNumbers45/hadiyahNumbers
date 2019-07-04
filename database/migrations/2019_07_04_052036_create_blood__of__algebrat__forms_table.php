<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodOfAlgebratFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood__of__algebrat__forms', function (Blueprint $table) {
<<<<<<< HEAD
          $table->increments('id')->unique();
          $table->string('date');
          $table->string('day');
          $table->integer('observe_id')->unsigned();
          $table->integer('count_of_agencies')
          $table->integer('service_id')->unsigned();
      });
      Schema::table('blood__of__algebrat__forms', function($table) {
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
        Schema::dropIfExists('blood__of__algebrat__forms');
    }
}
