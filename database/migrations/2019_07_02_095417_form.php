<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Form extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('form', function (Blueprint $table) {
           $table->increments('IDF')->unique();
           $table->string('Day');
           $table->string('Date');
           $table->int('NuServiceProviders');
           $table->string('IDP');
            $table->string('IDO');





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
           Schema::drop('form');
     }
 }
