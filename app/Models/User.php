<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
	
    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = ['name','email','password','token','two_factor_secret','two_factor_recovery_codes','two_factor_confirmed_at','type'];
	
    protected $hidden = [
        'password',
        'remember_token',
    ];
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
