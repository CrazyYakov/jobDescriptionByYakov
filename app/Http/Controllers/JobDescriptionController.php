<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JobDescription;
use Illuminate\Support\Carbon;
class JobDescriptionController extends Controller
{
    public function index()
    {                           
        return view('showDocuments')->with([
            'jobDescriptions' => JobDescription::field(),
        ]);
    }

    public function create()
    {
        $inst = Auth::user()->inst_id;  
        return view('createDocument')->with(
             [
                'jobs' => App\Job_positions::where('inst_id',$inst)->get(),
                'requirements' => App\requirement::typeReq($inst),
                'typeReqs' => App\type_Req::where('inst_id',$inst)->get(),
                'willClaims' => App\User::willClaim($inst),
                'structUnits' => App\struct_unit::where('inst_id',$inst)->get(),
             ]
         );
    }
    public function createJD(Request $request){    
    
        include '/var/www/laravel/blog/app/phpWord/phpoffice/phpword/bootstrap.php';
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor('doc.docx');        
        $document->setValue('jobClaim', App\Job_positions::find(App\User::find($request['willClaim'])->job_id)->name);
        $document->setValue('claim', App\User::find($request['willClaim'])->name);
        $document->setValue('year', 2019);
        $document->setValue('inst', App\institutions::find(Auth::user()->inst_id)->institut);
        $document->setValue('job', App\Job_positions::find($request['Job'])->name);
        $document->setValue('structUnit', App\struct_unit::find($request['structUnit'])->name);
        $document->setValue('dirManager', $request["directManager"]);
        $document->setValue('education', $request["education"]);
        $document->setValue('experience', $request["experience"]);
        $document->setValue('directMangerParentCase', $request["directMangerParentCase"]);
        $document->setValue('superiorManagerAblative', $request["superiorManagerAblative"]);
        $document->setValue('empoyeeKnow', $request["empoyeeKnow"]);
        $document->setValue('empoyeeKnowAuto', $request["empoyeeKnowAuto"]);
        $document->setValue('jobDuties', $request["jobDuties"]);
        $document->setValue('jobDutiesAuto', $request["jobDutiesAuto"]);
        $document->setValue('rightAuto', $request["rightAuto"]);
        $document->setValue('ResponsibilityAuto', $request["ResponsibilityAuto"]);
        
        
        $document->saveAs(JobDescription::max('id')+(1)."_".Auth::user()->name."_".$request['Job']."_".$request['structUnit'].".docx");

        JobDescription::create([
            'nameDocument' =>JobDescription::max('id')+(1)."_".Auth::user()->name."_".$request['Job']."_".$request['structUnit'],
            'record' => htmlspecialchars($request['empoyeeKnowAuto']),
            'created_at' => Carbon::now(),
            'user_id' => Auth::user()->id,
            'unit_id' => $request['structUnit'],
            'job_id' => $request['Job']
        ]);

        return redirect()->route('showDocuments');      
    } 
}

