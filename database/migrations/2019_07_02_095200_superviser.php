<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Superviser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('superviser', function (Blueprint $table) {
           $table->string('id')->unique();
           $table->string('Fname');
           $table->string('Sname');
           $table->string('Lname');
           $table->string('email')->unique();
           $table->string('password',255);
           $table->string('IDAdmin');
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
         Schema::drop('superviser');
         //
     }
 }
