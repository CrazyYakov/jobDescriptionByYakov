<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_positions extends Model
{
    protected $fillable = ['name', 'description', 'inst_id'];
}
