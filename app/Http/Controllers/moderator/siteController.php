<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteController extends Controller
{
    public function site()
    {
        return view('moderator.site');
    }
}
