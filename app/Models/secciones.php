<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secciones extends Model
{
    use HasFactory;
    protected $table  = 'secciones';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
