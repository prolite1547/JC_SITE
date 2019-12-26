@extends('main_layout')
@section('title', 'Job Listing') 
@section('content')
     <div class="container-fluid">
          <div class="row mt-2">
               <div class="col-md-9">
                    <section class="job-list endless-pagination" data-next-page="{{ $jobs->nextPageUrl() }}">
                              @foreach ($jobs as $job)
                              <a href="{{ URL::to('/job')}}/details/{{$job->id}}" target="_about" style="text-decoration: none;">
                                   <div class="card card-clickable mt-2" data-id="{{ $job->id  }}">
                                        <div class="card-body card__body">
                                                  <h5 class="card-title job-title-listing">{{ $job->job_title }}</h5>
                                                   <span class="job-detail-listing__salary"> <i class="fa fa-dollar"></i> {{ $job->salary }}</span>
                                                  <p class="job-detail-listing">{!! \Illuminate\Support\Str::limit($job->job_description, 150, $end=' ...') !!} </p>
                                                  <div class="card-sub-title">
                                                       <div class="row">
                                                            <div class="col-md-10">
                                                                 <span class="job-detail-listing__location"> <i class="fa fa-map-marker"></i> &nbsp; {{ $job->job_location }} &nbsp; <i class="fa fa-hourglass-half"></i>&nbsp;  {{ $job->job_type }} &nbsp; <i class="fa fa-briefcase"></i> &nbsp;   {{ $job->experience }} Experience</span>
                                                              </div>
                                                            <div class="col-md-2">
                                                                 <span class="job-detail-listing__posted">{{ $job->created_at->diffForHumans()  }}</span>
                                                            </div>
                                                       </div>
                                                       
                                                  </div>
                                        
                                             </div>
                                        
                                   </div>
                              </a>
                              @endforeach
                    </section>
               </div>
               <div class="col-md-3">
                    <div class="box-shadowed">
                         ADS
                    </div>
               </div>
         
          </div>
{{-- 
         <div class="row">
              <div class="col-md-9">
               <div class="card__body_2">
                    {!! $jobs->links() !!}
               </div>
              </div>
         </div>
           --}}
         
     </div>
   
@endsection