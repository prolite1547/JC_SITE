@extends('header')

<body style="background-color: #ecf0f1 !important;padding-bottom: 200px;">
        <nav class="navbar sticky-top" style="background-color: #2c3e50 !important;">
               
                <div class="d-flex justify-content-start">
                        <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('images/app_icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                                <span class="header-title">Jobs Corner</span>
                        </a>
                </div>
                @if(Route::currentRouteName() == 'home')
                        <div class="d-flex justify-content-end">
                                <input type="text" class="form-control" id="search-job" placeholder="Search job">
                                        <div class="input-group-append">
                                        <span class="btn btn-default"><i style="color:white;" class="fa fa-search"></i></span>
                                </div>
                        </div>
                @endif
               
        </nav>
        @yield('content')
@extends('footer')