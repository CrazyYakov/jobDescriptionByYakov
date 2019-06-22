<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable = ['nameDocument','status','created_at','adoption_at'];
    
    
}
