<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{

    protected $table = 'transporte';
    protected $primaryKey = 'id_transporte';
    protected $fillable = ['nombre', 'razon_social'];

    use HasFactory;
    
    public function camion()
    {
        return $this->hasMany('App\Camion', 'id_transporte', 'id_transporte');
    }
}
