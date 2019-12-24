@extends('main_layout')
@section('title', 'Job Listing') 
@section('content')
     <div class="container-fluid">
          <div class="row mt-2">
               <div class="col-md-9">
                    <section class="job-list endless-pagination" data-next-page="{{ $jobs->nextPageUrl() }}">

                              @foreach ($jobs as $job)
                              <a href="{{ URL::to('/job')}}/details/{{$job->id}}" target="_about" style="text-decoration: none;">
                                   <div class="card card-clickable" data-id="{{ $job->id  }}">
                                        <div class="card-body card__body">
                                                       <h5 class="card-title job-title-listing">{{ $job->job_title }}</h5>
                                                  <span class="job-detail-listing">{{ $job->job_location }}</span><br>
                                                  <span class="job-detail-listing">{{ $job->salary }}</span>
                                                  <p class="job-detail-listing">{{ \Illuminate\Support\Str::limit($job->job_description, 200, $end=' ...') }} </p>
                                        </div>
                                   </div>
                              </a>
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