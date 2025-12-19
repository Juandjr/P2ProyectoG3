<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->text('descripcion');
            $table->foreignId('bus_id')->nullable()->constrained('buses')->onDelete('set null');
            $table->foreignId('conductor_id')->nullable()->constrained('conductores')->onDelete('set null');
            $table->foreignId('usuario_id')->nullable()->constrained('users')->onDelete('set null');
            $table->dateTime('fecha');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('reportes');
    }
};
