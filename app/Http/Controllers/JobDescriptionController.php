<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JobDescription;
class JobDescriptionController extends Controller
{
    public function index()
    {        
        return view('showDocuments',[
            'jobDescription' => JobDescription::paginate(10),
            
        ]);
    }
    public function create()
    {
        $inst = Auth::user()->inst_id;  
        return view('createDocument');//->with(
        //     [
        //         //'typeReqs' => App\type_Req::where('inst_id','=',$inst),
        //     ]
        // );
    }

    public function field_fk($struct_unit, $job)
    {
        $result = [
            'job' => App\Job_positions::find($job),
            'struct' => App\struct_unit::find($struct_unit),
        ];
    }
    public  function createJD(){        
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

        $text = "";
        $section->addText( htmlspecialchars($text),
                                        array(),
                                        array()
        );  
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
        $objWriter->save('doc.docx');
        return redirect()->route('/showDocuments');      
    } 
}
