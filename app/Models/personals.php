<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personals extends Model
{
    use HasFactory;
    protected $table = 'personals';
    protected $fillable = [
        'nombre',
        'direccion',
        'Seccion_empresa',
        'Seccion_empresa',
        'Departamento_empresa',
        'estado',
    ];

    public function vs_seccion(){
        return $this->hasOne(vs_seccion::class,'id','Seccion_empresa');
    }

    public function vs_departamento()
    {
        return $this->hasOne(vs_departamento::class, 'id', 'Departamento_empresa');
    }
}
