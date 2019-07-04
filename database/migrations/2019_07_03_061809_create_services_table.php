<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('description',255);
            $table->integer('program_id')->unsigned();
          //  $table->foreign('program_id')->references('id')->on('programs');
        });
        Schema::table('services', function($table) {
              $table->foreign('program_id')->references('id')->on('programs');
          });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
