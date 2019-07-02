<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\type_Req;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class requirement extends Model
{
    protected $fillable = ['name','text','typeReq_id'];

    public function field_typeR($typeReq)
    {
        return type_Req::find($typeReq)->nameType;
    }

    public static function typeReq($inst)
    {       
             
        return  DB::select("SELECT Distinct r.id , r.name, tr.nameType, r.text, r.typeReq_id  FROM requirements as  r, type__reqs as tr WHERE r.typeReq_id In (SELECT id FROM type__reqs WHERE inst_id = $inst) AND tr.id = r.typeReq_id");
    }
    
}
