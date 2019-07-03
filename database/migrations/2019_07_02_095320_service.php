<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Service extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('service', function (Blueprint $table) {
           $table->increments('ID')->unique();
           $table->string('Name');
           $table->string('Description',255);
           $table->string('IDP');

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
           Schema::drop('service');
     }
 }
