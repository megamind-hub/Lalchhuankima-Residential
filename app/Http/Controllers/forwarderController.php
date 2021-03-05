<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use DB;
use Response;
use Mail;
use App\Mail\StatusMail;

class forwarderController extends Controller
{
    public function circleView()
     
    {
       $circles = DB::select('select * from forms where Forwarder_Status = ?', ['approved']);
       return view('circle_officer', ['circles' => $circles]);
       
    }

    public function index(){
        $forwarder = Form::all();
        return view ('forwarder',['forwarder'=>$forwarder]);
    }

  public function forwarderData($id){
      $forwarderData = Form::findOrFail($id);
      return view('forwarderData') ->with ('forwarderData',$forwarderData);  
    }

    
    // public function show($id){
    //     return ;
        
    // }
    // public function download($file1){
    //     return ;
    // }

    public function update(Request $request , $id)
    {
        $status= form::findOrFail($id);

        if($request->has('approve'))
        {
            $status->Forwarder_Status = 'approved';
            $status->save();
            Mail::to($status->email)->send(new StatusMail($status));

            // $applicantName = $status->name;
            // $Forwarder_Status = $status->Forwarder_Status;

            // $message="Dear $applicantName, your application form ";
            // $abs=$status->email;
            // $receiverMail = $abs;
        
            // $data = array("body"=>$message);
    
            // Mail::send('testMail',$status,function($message) use ($receiverMail,$applicantName)
            // {    $message->to($receiverMail,$applicantName)
            //     ->subject("$applicantName Your application for Permanent Residential Address have been Forwarded to the Circle Officer by the Forwarder");
            //     $message->from("necrofrots@gmail.com","Permanent Residential Address Certificate");
            //     $message->replyTo("noreply@gmail.com");
    
            // });
        return redirect('/forwarder');
        }
        elseif($request->has('reject')){
            return view ('reject',['application_forms'=>$status]);
        }
    }
    public function update1(Request $request , $id){
        $status= form::findOrFail($id);
       
        $status->Forwarder_Status =request('reject');
        $status->save();
        
        return redirect('/forwarder');
    }
   
     public function download1($id){
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
    
    public function download2($id){
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

    public function download3($id){
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
