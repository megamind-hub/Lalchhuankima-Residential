<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Response;
class MandalController extends Controller
{
    
    public function mandalData($id){
        $mandalData = Form::findOrFail($id);
        return view('mandalData') ->with ('mandalData',$mandalData);  
      }

      public function statuss(Request $request , $id)
      {
          $status= form::findOrFail($id);
          if($request->has('Issue')){
              $status->Mandal_Officer_Status = 'Issued';
              $status->save();
              return redirect('/mandal_officer');
          }
          elseif($request->has('reject')){
              return view ('reject',['application_forms'=>$status]);
          }
      }
      public function statuss1(Request $request , $id){
          $status= form::findOrFail($id);
         
          $status->Mandal_Officer_Status =request('reject');
          $status->save();
          
          return redirect('/mandal_officer');
      }

      public function download7($id){
        $application_forms = Form::find($id);
        $filename = $application_forms->file1;
        $file_path = public_path()."/public/images/".$filename;
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
    
    public function download8($id){
        $application_forms = Form::find($id);
        $filename = $application_forms->file2;
        $file_path = public_path()."/public/images/".$filename;
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }

    public function download9($id){
        $application_forms = Form::find($id);
        $filename = $application_forms->file3;
        $file_path = public_path()."/public/images/".$filename;
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
}
