<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vs_departamento extends Model
{
    use HasFactory;

    protected $table = 'vs_departamento';
    protected $fillable = [
        'nombre',
        'nomenclatura',
    ];
}
