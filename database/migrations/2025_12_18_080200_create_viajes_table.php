<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade');
            $table->foreignId('conductor_id')->constrained('conductores')->onDelete('cascade');
            $table->foreignId('ruta_id')->constrained('rutas')->onDelete('cascade');
            $table->dateTime('hora_salida');
            $table->dateTime('hora_llegada')->nullable();
            $table->integer('distancia_recorrida')->nullable();
            $table->integer('calificacion')->nullable();
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('viajes');
    }
};
