<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FSoulFood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('fSoulFood', function (Blueprint $table) {
           $table->string('IDF');
           $table->string('Location');
           $table->string('City');
           $table->string('Evaluation');




       });
     }


     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         //
           Schema::drop('fSoulFood');
     }
  }
