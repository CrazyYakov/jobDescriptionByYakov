<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class role extends Model
{
    public static function rolesforAdmin()
    {       
        return DB::select("SELECT * FROM roles WHERE nameRole = 'user' OR nameRole = 'moderator'");
    }
}
