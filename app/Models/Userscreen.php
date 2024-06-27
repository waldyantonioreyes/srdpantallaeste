<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userscreen extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'userscreens';

    protected $fillable = ['username','user_id', 'password'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
