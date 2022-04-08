<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TypeReq;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class Requirement extends Model
{
    protected $fillable = ['name','text','typeReq_id'];

    public function field_typeR($typeReq)
    {
        return TypeReq::find($typeReq)->nameType;
    }

    public static function typeReq($inst)
    {            
        return  DB::select("SELECT Distinct r.id , r.name, tr.nameType, r.text, r.typeReq_id  FROM requirements as  r, typeReq as tr WHERE r.typeReq_id In (SELECT id FROM typeReq WHERE inst_id = $inst) AND tr.id = r.typeReq_id");
    }
    
}
