<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobDescription;
class JobDescriptionController extends Controller
{
    public function index()
    {
        $jd = JobDescription::all();
        return view('showDocuments',[
            'jobDescription' => JobDescription::paginate(10)
        ]);
    }
}
