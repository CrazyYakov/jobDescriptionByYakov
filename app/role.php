<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    const USER  = 1;
    const MODERATOR  = 2;
    const ADMIN = 3;
    const SUPER_ADMIN = 4;

    public static function getRolesforAdmin()
    {
        return DB::table('roles')->whereIn('id', [self::USER, self::MODERATOR, self::ADMIN])->get();
    }
}
