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
            $table->integer('table_no')->unsigned();
            $table->integer('program_id')->unsigned();
        });
        Schema::table('services', function($table) {
          $table->foreign('program_id')->references('id')->on('programs');
          $table->foreign('table_no')->references('id')->on('table__codes');
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
