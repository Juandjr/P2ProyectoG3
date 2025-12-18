<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->integer('capacidad');
            $table->integer('kilometraje');
            $table->string('compania');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buses');
    }
};