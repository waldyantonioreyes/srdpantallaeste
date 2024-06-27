<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = ['name','email','token','two_factor_secret','two_factor_recovery_codes','two_factor_confirmed_at','type'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function configurations()
    {
        return $this->hasMany('App\Models\Configuration', 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userscreens()
    {
        return $this->hasMany('App\Models\Userscreen', 'user_id', 'id');
    }
    
}
