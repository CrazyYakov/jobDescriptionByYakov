<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class DocumentController extends Controller
{
    
    public function create()
    {
        return view('createDocument');
    }

    public function show()
    {
        $document = App\documents::all();
        
    }
}
