<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FbodyFood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('fbodyFood', function (Blueprint $table) {
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
           Schema::drop('fbodyFood');
     }
  }
