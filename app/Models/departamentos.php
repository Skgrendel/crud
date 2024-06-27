<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];
    protected $table = 'departamentos';


    public function vs_seccion()
    {
        return $this->hasOne(secciones::class, 'id', 'seccion_id');
    }
}
