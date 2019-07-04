<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaisFCare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('materiaisFSoulFood', function (Blueprint $table) {
           $table->string('IDF');
           $table->string('IDM');
           $table->string('Count');



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
           Schema::drop('materiaisFSoulFood');
     }
  }
