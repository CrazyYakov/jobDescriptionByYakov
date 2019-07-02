<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\struct_unit;
class StructUnitController extends Controller
{
    public function index()
    {
        $inst = Auth::user()->inst_id;        
        return view('moderator.structUnit.index',[
            
            'structUnits'=> struct_unit::where('inst_id', $inst)->get(),
            
        ]);
    }
    
    public function create()
    {
        $inst = Auth::user()->inst_id;
        return view('moderator.structUnit.create',[
            'struct_unit'=>[]
        ]);
    }
    public function store(Request $request)
    {
        struct_unit::create([
            'struct_unit' => $request['name'],
            'description'=>$request['description'],
            'inst_id'=>Auth::user()->inst_id,
        ]);

        return redirect()->route('moderator.StructUnit.index');
    }
}
