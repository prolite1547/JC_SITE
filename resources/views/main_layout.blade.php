@extends('header')

<body style="background-color: #ecf0f1 !important;">
   
        <nav class="navbar navbar-light bg-light" style="background-color: #2c3e50 !important;">
                <a class="navbar-brand" href="#">
                {{-- <img src="{{ asset('images/app_icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt=""> --}}
                {{-- <span style="color: white !important;">UAE JOBS</span> --}}
                {{-- <span class="header-title">Jobs Corner</span> --}}
                </a>
                
        </nav>
        
        @yield('content')
   
</body>
@extends('footer')