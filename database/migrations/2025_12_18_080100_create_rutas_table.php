<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->integer('distancia_total');
            $table->integer('tiempo_estimado');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('rutas');
    }
};
