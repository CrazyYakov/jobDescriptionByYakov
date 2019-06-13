<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App;

class DocumentController extends Controller
{    
    public function create()
    {
        return view('createDocument');
    }

    public function show()
    {
        $documents = App\Documents::all();
        return view('/showDocuments', compact('documents'));
    }
}
