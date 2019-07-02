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
        echo "hhhh";
        exit();    
        include '/var/www/laravel/blog/app/phpWord/phpoffice/phpword/bootstrap.php';

        $phpWord = new \PhpOffice\PhpWord\PhpWord();        
        $phpWord->setDefaultFontName('Times New Roman');
        $phpWord->setDefaultFontSize(14);
        $properties = $phpWord->getDocInfo();
        $properties->setCreator('My name');
        $properties->setCompany('My factory');
        $properties->setTitle('My title');
        $properties->setDescription('My description');
        $properties->setCategory('My category');
        $properties->setLastModifiedBy('My name');
        $properties->setCreated(mktime(0, 0, 0, 3, 12, 2014));
        $properties->setModified(mktime(0, 0, 0, 3, 14, 2014));
        $properties->setSubject('My subject');
        $properties->setKeywords('my, key, word');

        $sectionStyle = array();
        $section = $phpWord->addSection($sectionStyle);

        
        $section->addText( htmlspecialchars($request['Right']),
                                        array(),
                                        array()
        );  
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
        $objWriter->save('doc.docx');

        JobDescription::create([
            'nameDocument' =>JobDescription::max('id')."_".Auth::user()->name."_".$request['Job']."_".$request['structUnit'],
            'record' => $request['empoyeeKnow'],
            'created_at' => DateTime/Carbon::now(),
            'user' => Auth::user()->id,
            'unit_id' => $request['structUnit'],
            'job_id' => $request['Job'],
        ]);

        return redirect()->route('/showDocuments');      
    } 
}
