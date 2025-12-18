<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('paradas_bus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade');
            $table->foreignId('parada_id')->constrained('paradas')->onDelete('cascade');
            $table->integer('orden_parada');
            $table->integer('duracion_minutos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('paradas_bus');
    }
};
