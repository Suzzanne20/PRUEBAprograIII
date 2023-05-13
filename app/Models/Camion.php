<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    protected $table = 'camion';
    protected $primaryKey = 'id_camion';
    protected $fillable = ['placa', 'marca', 'color', 'modelo', 'capacidad', 'id_transporte'];
    use HasFactory;
    
    public function transporte()
    {
        return $this->belongsTo('App\Transporte', 'id_transporte', 'id_transporte');
    }
}
