<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegations', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nationality');
            $table->string('address_in_mecca');
            $table->string('address_in_madinah');
            $table->string('arrival_time');
            $table->string('date_of_arrival');
            $table->string('date_of_Visit');
            $table->string('visit_time');
            $table->string('contact_number');
            $table->string('number_of_women');
            $table->string('number_of_children');
            $table->string('number_of_men');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delegations');
    }
}
