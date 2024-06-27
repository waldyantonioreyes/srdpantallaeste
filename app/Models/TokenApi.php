<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenApi extends Model
{
    use HasFactory;
    protected $fillable = ['asignedto','token','ip','estatus'];
    protected $table = 'tokens_api';

    public $timestamps = false;
}
