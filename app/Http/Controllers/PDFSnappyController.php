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
            $pdf->setOption('margin-top',0);
            $pdf->setOption('margin-bottom',0);
            $pdf->setOption('margin-left',0);
            $pdf->setOption('margin-right', 0);
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

    public function show(){
        $data = $this->createSVGs();
        //return view('side-bar', $data);
        $pdf = PDF::loadView('side-bar', $data);
            $pdf->setOptions([
                'margin-top' => 0,
                'margin-bottom' => 0,
                'margin-left' => 0,
                'margin-right' => 0,
                'page-size' => 'A4',
                'page-height' => '11.7in'
            ]);
            $pdf->setTemporaryFolder(storage_path('snappy'));
            //$paper = $pdf->getPaper();
            //dd($paper);
            $name = "cv.pdf";
            return $pdf->stream($name);
    }
}
