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

    public static function rolesforAdmin()
    {
        return DB::select("SELECT * FROM roles WHERE id in (" . self::MODERATOR . "," . self::ADMIN . ")");
    }
}
