<?php

namespace App\Models;

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\SeccionesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personals extends Model
{
    use HasFactory;
    protected $table = 'personals';
    protected $fillable = [
        'nombre',
        'direccion',
        'seccion_id',
        'departamento_id',
        'estado'
    ];

    public function vs_seccion()
    {
        return $this->hasOne(secciones::class, 'id', 'seccion_id');
    }

    public function vs_departamento()
    {
        return $this->hasOne(departamentos::class, 'id', 'departamento_id');
    }
}
