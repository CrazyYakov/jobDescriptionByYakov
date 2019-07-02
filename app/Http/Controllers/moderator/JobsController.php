<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job_positions;
use Illuminate\Support\Facades\Auth;
class JobsController extends Controller
{
    public function index()
    {
        $inst = Auth::user()->inst_id;
        
        
        return view('moderator.jobs.index',[
            
            'jobs'=> Job_positions::where('inst_id', $inst)->get(),
            
        ]);
    }
    
    public function create()
    {
        $inst = Auth::user()->inst_id;
        return view('moderator.jobs.create',[
            'Job_positions'=>[]
        ]);
    }
    public function store(Request $request)
    {
        Job_positions::create([
            'name' => $request['name'],
            'description'=>$request['description'],
            'inst_id'=>Auth::user()->inst_id,
        ]);

        return redirect()->route('moderator.jobs.index');
    }
}
