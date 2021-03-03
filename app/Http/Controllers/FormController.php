<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use Illuminate\Support\Str;

class FormController extends Controller
{
    //
    function getData(request $req)
    {
        $form = new form;
        $form->Application_no="PRC0".time();
        $form->name=$req->name;
        $form->date_Of_Birth=$req->dob;
        $form->age=$req->age;
        $form->gender=$req->gender;
        $form->email=$req->email;
        $form->contact=$req->contact;
        $form->place_Of_Birth=$req->pob;
        $form->occupation=$req->occupation;
        $form->monthly_Income=$req->income;
        $form->education=$req->education;
        $form->father_Name=$req->fname;
        $form->mother_Name=$req->mname;
        $form->spouse_Name=$req->sname;
        $form->present_Address=$req->paddress;
        $form->sub_Locality1=$req->slocality1;
        $form->sub_Locality2=$req->slocality2;
        $form->location=$req->padd;
        $form->sub_District=$req->pasd;
        $form->district=$req->paddd;
        $form->state=$req->state;
        $form->pinCode=$req->pcode;
        $form->country=$req->country;
        $form->police_Station=$req->police;
        $form->post_Office=$req->posto;
        $form->detail_Of_Residence=$req->residence;
        $form->constituency_No=$req->enrollment;
        $form->constituency_Name=$req->constituency;
        $form->id_Card=$req->idcard;
        $form->year_Of_Residence=$req->year;
        $form->purpose_For_Residential_Certificate=$req->purpose;
        $form->date=$req->date;
       
        if($files = $req->file('file1')){
            try{
                $destinationPath  ="public/images";
                $randomNo = Str ::random(10);
                $myFileName = $randomNo.".". $files->getClientOriginalExtension();
                $files->move($destinationPath,$myFileName );
                $form->file1 = $myFileName;
            }catch(Exception $e){
                error_log("Error in file 1: ".$e);
            }
            
        }

        if($files = $req->file('file2')){
            try{
                $destinationPath  ="public/images";
                $randomNo = Str ::random(10);
                $myFileName = $randomNo.".". $files->getClientOriginalExtension();
                $files->move($destinationPath,$myFileName );
                $form->file2 = $myFileName;
            }catch(Exception $e){
                error_log("Error in file 2: ".$e);
            }
            
        }


        if($files = $req->file('file3')){
            try{
                $destinationPath  ="public/images";
                $randomNo = Str ::random(10);
                $myFileName = $randomNo.".". $files->getClientOriginalExtension();
                $files->move($destinationPath,$myFileName );
                $form->file3 = $myFileName;
            }catch(Exception $e){
                error_log("Error in file 3: ".$e);
            }
            
        }
       
    

        $form->save();
        return redirect('/csc')->with('message','Application send Successfully!');
       
    }
    

}
