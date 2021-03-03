<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Form;

class StatusController extends Controller
{
    public function index(){
        $cscStatus = Form::all();
        return view ('cscStatus',['cscStatus'=>$cscStatus]);
    }

    public function search(){
        $search_text = $_GET['search'];
        $name = Form::where('name','LIKE', '%'.$search_text.'%')->get();

        return view ('search',['name'=>$name]);
    }
    public function mypdf($id){
        $data =Form:: find($id);
        $pdf = PDF::loadView('acknowledge',compact('data'));
        $fileName ="";
        try{
            $fileName = $data->Application_No;
        }
        catch(Exception $e)
        {
            $fileName = 'myInfo';
        }
        return $pdf->stream();
        // return $pdf->download($fileName.'.pdf');
    }

    public function cert($id){
        $data =Form:: find($id);
        $pdf = PDF::loadView('acknowledge',compact('data'));
        $fileName ="";
        try{
            $fileName = $data->Application_No;
        }
        catch(Exception $e)
        {
            $fileName = 'myInfo';
        }
        return $pdf->stream();
        // return $pdf->download($fileName.'.pdf');
    }


        public function acknowledgement($id){
            $acknowledgement = Form::findOrFail($id);
            return view('acknowledgement') ->with ('acknowledgement',$acknowledgement);  
          }

    
    
    
        public function certificate($id){
            $certificate = Form::findOrFail($id);
            return view('certificate') ->with ('certificate',$certificate);  
          }
    }
    

