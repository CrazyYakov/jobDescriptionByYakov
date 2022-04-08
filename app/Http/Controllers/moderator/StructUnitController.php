<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\StructUnit;
class StructUnitController extends Controller
{
    public function index()
    {
        $inst = Auth::user()->inst_id;        

        return view('moderator.structUnit.index',[
            'structUnits'=> StructUnit::where('inst_id', $inst)->get()
        ]);
    }
    
    public function create()
    {
        return view('moderator.structUnit.create');
    }

    public function store(Request $request)
    {
        StructUnit::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'inst_id' => Auth::user()->inst_id,
        ]);

        return redirect()->route('moderator.StructUnit.index');
    }
}
