<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('encabezados_dets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encabezado_id');
            $table->string('nombre',100);
            $table->string('nomenclatura',200);
            $table->boolean('estado')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encabezados_dets');
    }
};
