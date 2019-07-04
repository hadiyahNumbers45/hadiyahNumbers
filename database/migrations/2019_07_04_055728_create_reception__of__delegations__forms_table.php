<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptionOfDelegationsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reception__of__delegations__forms', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('date');
            $table->string('day');
            $table->integer('observe_id')->unsigned();
            $table->integer('delegation_id')->unsigned();
            $table->integer('service_id')->unsigned();
        });
        Schema::table('reception__of__delegations__forms', function($table) {
            $table->foreign('observe_id')->references('id')->on('observers');
             $table->foreign('delegation_id')->references('id')->on('delegations');
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
        Schema::dropIfExists('reception__of__delegations__forms');
    }
}
