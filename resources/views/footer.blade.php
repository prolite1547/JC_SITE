<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/app_icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                    <span class="header-title">Jobs Corner</span>
                    <p style="color: white;" class="description">UAE Dubai job search engine site.</p>
                </a>
                <ul class="nav social-media mt-3">
                    <li class="px-2">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="px-2">
                        <a href="#">
                            <i class="fa fa-google"></i>
                        </a>
                    </li>
                </li>
                
                </ul>
             </div>

             <div class="col-lg-2">
                 <a href='https://play.google.com/store/apps/details?id=com.deqfivestudios.jobscorner&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                    <img width="200" height="80" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/>
                </a>
             </div>

        </div>
    </div>
</footer>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>