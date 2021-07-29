<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class PDFSnappyController extends Controller
{
    //

    public function index(){
        try{

            $primary_color = Config::get('my_cv.primary_color');
            $data = $this->createSVGs();
            $data['primary_color'] = $primary_color;
            $pdf = PDF::loadView('snappy.pdf', $data);
            $pdf->setTemporaryFolder(storage_path('snappy'));
            $name = "cv.pdf";
            return $pdf->stream($name);
        }catch(\Exception $e){
            dd($e->getMessage());
        }
        
    }

    public function createSVGs(){
        $svgs = Config::get('my_cv.svgs');
        $files = [];
        foreach($svgs as $key => $value){
            $file_name = 'images/'.$key.".svg";
            $content = $value;
            if(!file_exists($file_name)){
                fopen($file_name, "w");
            }
            file_put_contents($file_name, $content);
            $files[$key] = $file_name;
        }
        return $files;
    }
}
