<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Mercancia extends Model
{
    protected $table = 'tipo_mercancia';
    protected $primaryKey = 'id_tipmerca';
    protected $fillable = ['descripcion'];

    use HasFactory;
    
    public function mercancia()
    {
        return $this->hasOne('App\Mercancia', 'id_tipmerca', 'id_tipmerca');
    }
}
