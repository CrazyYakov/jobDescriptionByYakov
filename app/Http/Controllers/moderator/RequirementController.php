<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\requirement;
use App\TypeReq;
use Illuminate\Support\Facades\Auth;
class RequirementController extends Controller
{
    public function index()
    {            
        $inst = Auth::user()->inst_id;
        return view('moderator.requirements.index',[            
            'requirements'=> requirement::typeReq($inst),            
        ]); 
    }
    
    public function create()
    {
        $inst = Auth::user()->inst_id;
        return view('moderator.requirements.create',[
            'typeReqs' => TypeReq::where('inst_id', $inst)->get(),
        ]);
    }
    public function store(Request $request)
    {
        requirement::create([
            'name' => $request['name'],
            'text'=>$request['text'],
            'typeReq_id'=>$request['typeReq'],
        ]);

        return redirect()->route('moderator.requirements.index');
    }
}
