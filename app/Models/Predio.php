<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predio';
    protected $primaryKey = 'id_predio';
    protected $fillable = ['nombre_predio', 'direccion'];
    use HasFactory;
    public function mercancia()
    {
        return $this->hasMany('App\Predio', 'id_predio', 'id_predio');
    }
}
