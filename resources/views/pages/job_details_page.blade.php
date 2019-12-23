@extends('main_layout')
@section('title', 'Job Details') 
@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-9">
          <div class="card">
              <div class="card-body">
                 <div class="row">
                     <div class="col-md-9">
                          <h5>{{ $job->job_title }}</h5>
                          <p>{{ $job->job_location }}</p>
                     </div>
                     <div class="col-md-3">
                          <p>{{ $job->experience }}</p>
                          <p>{{ $job->salary }}</p>
                     </div>
                 </div>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <h5>Job Overview</h5>
                  <p>{{ $job->job_description }}</p>
              </div>
          </div>
        </div>
        <div class="col-md-3">
             SIDE BAR
        </div>
  
  </div>
</div>
   
@endsection