<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TypeReq;
use Illuminate\Support\Facades\Auth;
class typeReqController extends Controller
{
    public function index()
    {
        $inst = Auth::user()->inst_id;
        return view('moderator.typeReqs.index',[
            'typeReqs' => TypeReq::where('inst_id', $inst)->get(),
        ]);
    }
    
    public function create()
    {
        
        return view('moderator.typeReqs.create',[
            'typeReqs' => []
        ]);
    }
    public function store(Request $request)
    {
        TypeReq::create([
            'nameType' => $request['nameType'],
            'description'=>$request['description'],
            'inst_id'=>Auth::user()->inst_id,
        ]);

        return redirect()->route('moderator.typeReqs.index');
    }
}
