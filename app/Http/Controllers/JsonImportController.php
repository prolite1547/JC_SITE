<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JsonImportController extends Controller
{   
    public function index(){
        return view('admin.import_page');
    }
    public function importFile(Request $request){
        $jsonFile = $request->json_upload;
        $contents = file_get_contents($jsonFile->getRealPath());
        $json_array = json_decode($contents, true); 
        $concats = '';
    
        foreach($json_array as $json){
            $jobs = new Job;
            $jobs->job_title = $json['job_title'];
            $jobs->job_description = $json['description'];
            $jobs->job_type = $json['job_type'];
            $jobs->salary = $json["salary"];
            $jobs->gender = $json["gender"];
            $jobs->experience = $json["experience"];
            $jobs->email = $json["email"];
            $jobs->contact_no = $json["contact_no"];
            $jobs->job_location = $json["job_location"];
            $jobs->save();
        }

       return  'SUCCESS';
    }
}
