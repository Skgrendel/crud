<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('DROP VIEW IF EXISTS vs_seccion');
        DB::statement('CREATE VIEW vs_seccion AS SELECT id, nombre,nomenclatura FROM encabezados_dets WHERE encabezado_id = 1');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
