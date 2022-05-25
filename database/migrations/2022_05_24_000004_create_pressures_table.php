<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressuresTable extends Migration
{
    public function up()
    {
        Schema::create('pressures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sys');
            $table->integer('dia');
            $table->integer('pulse');
            $table->datetime('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
