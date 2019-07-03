<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObserverServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observer__services', function (Blueprint $table) {
          $table->integer('observer_id')->unsigned();
        //  $table->foreign('observer_id')->references('id')->on('observers');
          $table->integer('services_id')->unsigned();
        //  $table->foreign('services_id')->references('id')->on('services');

        });

        Schema::table('observer__services', function($table) {
              $table->foreign('observer_id')->references('id')->on('observers');
              $table->foreign('services_id')->references('id')->on('services');
          });
//add
      


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observer__services');
    }
}
