<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultados_loterias extends Model
{
    use HasFactory;

    protected $fillable = ['id_loterias', 'num1', 'num2', 'num3', 'actualizo', 'created_at', 'updated_at'];

    protected $table = 'resultados_loterias';

    public $timestamps = false;
}
