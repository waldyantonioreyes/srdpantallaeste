<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rifas extends Model
{
    //use HasFactory;

    protected $table = 'rifas';
    protected $fillable = ['nombre','apellido','telefono','cedula','ciudad','pais','numparticiapnte'];
    
}
