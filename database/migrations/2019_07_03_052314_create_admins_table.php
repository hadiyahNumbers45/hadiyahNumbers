<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
=======
            $table->increments('id')->unique();
>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
            $table->string('f_name');
            $table->string('s_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->string('password',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
