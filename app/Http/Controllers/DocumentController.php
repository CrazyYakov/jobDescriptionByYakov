<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Documents;

class DocumentController extends Controller
{    
    public function create()
    {
        $dateServer ;
        return view('createDocument');
    }

    public static function show()
    {
        $documents = Documents::all();
        
        return view('/showDocuments', compact('documents'));
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
        DocumentController::show();        
    } 
}
