@extends('main_layout')
@section('title', 'Job Listing') 
@section('content')
     <div class="container-fluid">
          <div class="row mt-2">
               <div class="col-md-9">
                    <section class="job-list endless-pagination" data-next-page="{{ $jobs->nextPageUrl() }}">

                              @foreach ($jobs as $job)
                                   <div class="card card-clickable" data-id="{{ $job->id  }}">
                                        <div class="card-body card__body">
                                                  <a href="{{ URL::to('/job')}}/details/{{$job->id}}" target="_about">
                                                       <h5 class="card-title job-title-listing">{{ $job->job_title }}</h5>
                                                  </a>
                                                  <span>{{ $job->job_location }}</span><br>
                                                  <span>{{ $job->salary }}</span>
                                                  <p>{{ $job->job_description }}</p>
                                        </div>
                                   </div>
                              @endforeach
                         
                    </section>
               </div>
               <div class="col-md-3">
                   <div class="card">
                         <div class="card-body">
                              
                         </div>
                   </div>
               </div>
         
          </div>
     </div>
   
@endsection