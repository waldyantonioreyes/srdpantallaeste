<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenLottery extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'token_lottery';

    protected $fillable = ['token_id','lottery_id'];

    public function lottery(){
        return $this->belongsToMany(Lotery::class);
    }
	
}
