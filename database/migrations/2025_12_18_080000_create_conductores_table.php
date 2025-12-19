<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('licencia');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('vehiculo_asignado')->nullable();
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('conductores');
    }
};
