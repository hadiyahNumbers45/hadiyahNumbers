<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceObserver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('serviceObserver', function (Blueprint $table) {
           $table->string('IDO');
           $table->string('IDSe');



                           });
                         }

                         /**
                          * Reverse the migrations.
                          *
                          * @return void
                          */
                         public function down()
                         {   //
           Schema::drop('serviceObserver');
     }
 }
