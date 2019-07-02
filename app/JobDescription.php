<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class JobDescription extends Model
{
    
    protected $fillable  = ['nameDocument', 'record', 'created_at','user_id','unit_id','job_id'];

    public static function field()
    {
        $inst = Auth::user()->inst_id;
        return DB::select("SELECT jd.id, jp.name as jname, su.struct_unit, u.name, jd.created_at FROM job_descriptions as jd,  job_positions as jp, struct_units as su, users as u WHERE u.inst_id IN (SELECT inst_id FROM users WHERE inst_id  = $inst) AND jd.unit_id = su.id AND jd.job_id = jp.id AND jd.user_id = u.id");
    }


}
