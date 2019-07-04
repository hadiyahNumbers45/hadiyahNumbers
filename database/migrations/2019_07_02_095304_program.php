<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Program extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('program', function (Blueprint $table) {
          $table->increments('ID')->unique();
          $table->string('Name');
          $table->string('Description',255);

                });
              }

              /**
               * Reverse the migrations.
               *
               * @return void
               */
              public function down()
              {
                  Schema::drop('program');
                  //
              }
          }
