<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeReq extends Model
{
    protected $table = "typeReq";
    
    protected $fillable = ['nameType', 'description', 'inst_id'];

    public function requirements()
    {
        return $this->hasMany(Requirement::class, 'typeReq_id');
    }
}
