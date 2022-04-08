<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StructUnit extends Model
{
    protected $table = "struct_unit";
    protected $fillable = ['name', 'description', 'inst_id'];
}
