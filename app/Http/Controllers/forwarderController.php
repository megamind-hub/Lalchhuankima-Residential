<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use DB;
use Response;

class forwarderController extends Controller
{
    public function circleView()
     
    {
       $circles = DB::select('select * from forms where Forwarder_Status = ?', ['approved']);
       return view('circle_officer', ['circles' => $circles]);
    }
    public function index(){
        $forwarder = Form::where('Forwarder_Status', 'approved');
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

            $data= Form::find($id);
            $applicantName = $data->name;
            $Forwarder_Status = $data->Forwarder_Status;

            $msg="Dear $applicantName, your application form ";
            $abs=$data->Email;
            $receiverMail = $abs;
        
            $data = array("body"=>$msg);
    
            Mail::send('email',$data,function($message) use ($receiverMail,$applicantName)
            {    $message->to($receiverMail,$applicantName)
                ->subject("$applicantName YOUR APPLICATION FOR THE RENEWAL OF INNER LINE PASS  HAS BEEN REJECTED BY OFFICER ");
                $message->from("abc@mail.com","INNER LINE PASS");
                $message->replyTo("aktricks999@gmail.com");
    
            });

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
