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
        return DB::table('requirements')
            ->distinct()
            ->select(['requirements.id', 'requirements.name', 'typeReq.nameType', 'requirements.text', 'requirements.typeReq_id'])
            ->join('typeReq', 'typeReq.id', '=', 'requirements.typeReq_id')
            ->where('typeReq.inst_id', $inst)
            ->get();
    }
    
}
