@extends('main_layout')
@section('title', 'Job Details') 
@section('content')
<div class="container-fluid main-container">
    <div class="row mt-2">
       <div class="col-md-12">
        <div class="card">
            <div class="card-body card__body_2">
               <div class="row">
                   <div class="col-md-9">
                        <h5 class='job-title'>{{ $job->job_title }}</h5>
                        <i class="fa fa-map-marker"></i>&nbsp;<span class="sub-header">{{ $job->job_location }}</span>
                        | &nbsp;<span class="sub-header">{{ $job->gender }}</span>
                   </div>
                   <div class="col-md-3">
                        <i class="fa fa-hourglass-half"></i>&nbsp;<span class="sub-header">{{ $job->experience }} Experience</span><br>
                        <i class="fa fa-dollar"></i>&nbsp;<span class="sub-header"> {{ $job->salary }}</span>
                   </div>
               </div>
            </div>
        </div>
       </div>
    </div>
    <div class="row">
        <div class="col-md-9">
          <div class="card mt-1 job-overview-card">
              <div class="card-body card__body_2">
                  <h5>Job Overview</h5>
                  <span class="sub-header">{{ $job->job_type }} Job</span><br><br>
                  <p class="description">{!! $job->job_description !!}</p>
                  <h5>Contact details</h5>
                  @if ($job->email != '')
                      Email :  <span class="sub-header">{{ $job->email }}</span><br>
                  @endif
                  
                  @if ($job->contact_no != '')
                       Contact No. :  <span class="sub-header">{{ $job->contact_no }}</span><br>
                  @endif
                
              </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-1">
                  <div class="card-body card__body_side">
                      A  D  S
                  </div>
            </div>
        </div>
  
  </div>
</div>
   
@endsection