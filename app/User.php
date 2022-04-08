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

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function institutions()
    {
        return $this->belongsToMany(Institution::class);
    }

    public function jobPositions()
    {
        return $this->belongsToMany(JobPosition::class);
    }

    public function institution($param)
    {
        return institution::find($param)->name;
    }

    public function role($param)
    {
        return Role::find($param)->nameRole;
    }

    public static function willClaim($institutId)
    {
        $adminId = Role::ADMIN;
        $moderatorId = Role::MODERATOR;
        
        return DB::select("SELECT id, name FROM users WHERE role_id IN ($adminId, $moderatorId) AND inst_id = :param", ['param' => $institutId]);
    }

}
