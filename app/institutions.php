<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institutions extends Model
{
    public $timestamps = false;

    protected $fillable = ['institut','description'];
}