
    @foreach ($jobs as $job)
            <div class="card card-clickable" data-id="{{ $job->id  }}" data-href="{{ URL::to('/job')}}/details/{{$job->id}}">
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
 