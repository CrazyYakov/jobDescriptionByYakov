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
        $institutId = Auth::user()->inst_id;

        return view('createDocument')->with(
            [
                'jobs' => App\JobPosition::where('inst_id', $institutId)->get(),
                'typeReqs' => App\TypeReq::where('inst_id', $institutId)->get(),
                'willClaims' => App\User::willClaim($institutId),
                'structUnits' => App\StructUnit::where('inst_id', $institutId)->get(),
            ]
        );
    }

    public function createJD(Request $request)
    {    
        $text = "";

        $inst = Auth::user()->inst_id;

        foreach (App\TypeReq::where('inst_id', $inst)->get() as $typeR) {
            $text = (string) $typeR->nameType;

            foreach (App\requirement::typeReq($inst) as $requiement) {
                if ($typeR->id == $requiement->typeReq_id) {
                    $text = $text . " " . $request["requirement" . $requiement->id];
                }
            }            
        }
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor('doc.docx');
        $document->setValue('jobClaim', App\JobPosition::find(App\User::find($request['willClaim'])->job_id)->name);
        $document->setValue('claim', App\User::find($request['willClaim'])->name);
        $document->setValue('year', Carbon::now()->year());
        $document->setValue('inst', App\Institution::find(Auth::user()->inst_id)->name);
        $document->setValue('job', App\JobPosition::find($request['Job'])->name);
        $document->setValue('structUnit', App\StructUnit::find($request['structUnit'])->name);
        $document->setValue('dirManager', $request["directManager"]);
        $document->setValue('education', $request["education"]);
        $document->setValue('experience', $request["experience"]);
        $document->setValue('directMangerParentCase', $request["directMangerParentCase"]);
        $document->setValue('superiorManagerAblative', $request["superiorManagerAblative"]);
        $document->setValue('empoyeeKnow', $request["empoyeeKnow"]);
        $document->setValue('empoyeeKnowAuto', $request["empoyeeKnowAuto"]);
        $document->setValue('jobDuties', $request["jobDuties"]);
        $document->setValue('jobDutiesAuto', $request["jobDutiesAuto"]);
        $document->setValue('RightAuto', $request["RightAuto"]);
        $document->setValue('ResponsibilityAuto', $request["ResponsibilityAuto"]);
        $document->setValue('otherRequirements', $text);
        
        $document->setValue('otherRequirements', $text);

        $nameFileDocx = JobDescription::max('id') + (1) . "_" . Auth::user()->name . "_" . $request['Job'] . "_" . $request['structUnit'];
        $document->saveAs($nameFileDocx . ".docx");

        JobDescription::create([
            'nameDocument' => $nameFileDocx,
            'record' => htmlspecialchars($request['empoyeeKnowAuto']),
            'user_id' => Auth::user()->id,
            'unit_id' => $request['structUnit'],
            'job_id' => $request['Job'],
            'created_at' => Carbon::now()
        ]);

        return response()->download($nameFileDocx);//redirect()->route('showDocuments');      
    } 
}

