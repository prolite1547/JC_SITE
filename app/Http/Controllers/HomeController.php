<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{  
   protected $per_page = 10;

   public function index(Request $request){
        $jobs = Job::paginate($this->per_page);
        if($request->ajax()){
           return [
              'jobs' => view('ajax_contents.job_card')->with(compact('jobs'))->render(),
              'next_page' => $jobs->nextPageUrl()
           ];
        }
        return view('pages.home_page',  ['jobs'=>$jobs]);
   }
 
   public function showJobDetails($id){
      $job = Job::findorfail($id);
      return view('pages.job_details_page', ['job'=>$job]);
   }
}
