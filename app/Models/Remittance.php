<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remittance extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'remittances';

    protected $fillable = ['name','buy','sell'];
	
}
