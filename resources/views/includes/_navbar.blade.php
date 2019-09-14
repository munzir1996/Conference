<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" style="width: 140px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> {{__('index.navbarMenu')}}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav"
        style="{{App::islocale('ar')? "padding-right: 62%;":""}}">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::is('/')? "active":""}}"><a href="{{route('home')}}" class="nav-link">{{__('index.home')}}</a></li>
                {{-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> --}}
                {{-- <li class="nav-item"><a href="speakers.html" class="nav-link">Speakers</a></li> --}}
                {{-- <li class="nav-item"><a href="schedule.html" class="nav-link">Schedule</a></li> --}}
                {{-- <li class="nav-item"><a href="blog.html" class="nav-link">News</a></li> --}}
                <li class="nav-item {{Request::is('contact')? "active":""}}"><a href="{{route('contact')}}" class="nav-link">{{__('index.contact')}}</a></li>
                @if (App::islocale('en'))
                <li class="nav-item cta mr-md-2"><a href="/language/ar" class="nav-link">Arabic</a></li>
                @else
                <li class="nav-item cta mr-md-2"><a href="/language/en" class="nav-link">English</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>
