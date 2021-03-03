<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use DB;
use Response;
class CircleController extends Controller

{
    
    
    
    public function circleData($id){
        $circleData = Form::findOrFail($id);
        return view('circleData') ->with ('circleData',$circleData);  
      }

      public function status(Request $request , $id)
      {
          $status= form::findOrFail($id);
          if($request->has('approve')){
              $status->Circle_Officer_Status = 'Issued';
              $status->save();
              return redirect('/circle_officer');
          }
          elseif($request->has('forward')){
            $status->Circle_Officer_Status = 'Forwarded to Mandal';
            $status->save();
            return redirect('/circle_officer');
        }

          

          elseif($request->has('reject')){
              return view ('reject',['application_forms'=>$status]);
          }
      }
      public function status1(Request $request , $id){
          $status= form::findOrFail($id);
         
          $status->Circle_Officer_Status =request('reject');
          $status->save();
          
          return redirect('/circle_officer');
      }

      public function mandalView()
     
      {
         $mandals = DB::select('select * from forms where Circle_Officer_Status = ?', ['Forwarded to Mandal']);
         return view('mandal_officer', ['mandals' => $mandals]);
        }

        public function download4($id){
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
        
        public function download5($id){
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
    
        public function download6($id){
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
