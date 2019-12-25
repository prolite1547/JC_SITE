
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
 