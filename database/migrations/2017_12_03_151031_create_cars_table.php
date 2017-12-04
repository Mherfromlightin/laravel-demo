<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{

    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->float('price');
            $table->string('color');

            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
