<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('admin', function (Blueprint $table) {
           $table->string('ID')->unique();
           $table->string('Fname');
           $table->string('Sname');
           $table->string('Lname');
           $table->string('Email')->unique();
           $table->string('Password',255);

       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('admin');
         //
     }
 }