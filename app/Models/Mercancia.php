<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    protected $table = 'mercancia';
    protected $primaryKey = 'id_merca';
    protected $fillable = ['nombre_mercancia', 'id_tipmerca'];
    use HasFactory;
    public function tipo_mercancia()
    {
        return $this->belongsTo('App\TipoMercancia', 'id_tipmerca', 'id_tipmerca');
    }
}
