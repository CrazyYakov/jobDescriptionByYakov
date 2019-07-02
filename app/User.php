<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'inst_id', 'job_id','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function institution($param)
    {
        return institutions::find($param)->institut;
    }

    public function role($param)
    {
        return role::find($param)->nameRole;
    }

    public static function willClaim($param)
    {        
        return DB::select("SELECT id, name FROM users WHERE role_id IN (SELECT id FROM roles WHERE nameRole = 'admin' OR nameRole = 'moderator') AND inst_id = :param", ['param' => $param]);
    }

}
