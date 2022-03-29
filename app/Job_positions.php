<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_positions extends Model
{
    //protected $tableName = "job_positions";

    protected $fillable = ['name', 'description', 'inst_id'];
}
