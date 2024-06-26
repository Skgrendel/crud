<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vs_seccion extends Model
{
    use HasFactory;
    protected $table = 'vs_seccion';
    protected $fillable = [
        'nombre',
        'nomenclatura',
    ];
}
