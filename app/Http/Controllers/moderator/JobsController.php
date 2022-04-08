<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobPosition;
use Illuminate\Support\Facades\Auth;
class JobsController extends Controller
{
    public function index()
    {
        $inst = Auth::user()->inst_id;
        
        
        return view('moderator.jobs.index',[
            
            'jobs'=> JobPosition::where('inst_id', $inst)->get(),
            
        ]);
    }
    
    public function create()
    {
        $inst = Auth::user()->inst_id;
        return view('moderator.jobs.create',[
            'JobPosition'=>[]
        ]);
    }
    public function store(Request $request)
    {
        JobPosition::create([
            'name' => $request['name'],
            'description'=>$request['description'],
            'inst_id'=>Auth::user()->inst_id,
        ]);

        return redirect()->route('moderator.jobs.index');
    }
}
