@extends('layouts.master')
@section('styles')
<style>
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
    }
    .ftco-section {
    padding: 3em 0;
    }
    .ftco-animate{
        text-align: center;
    }
</style>
@endsection
@section('content')
<!-- START  -->

{{-- {{App::getLocale()}} --}}
{{-- {{ App::getlocale()}} --}}
<div class="hero-wrap" style="background-image: url({{asset('images/bg_a.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <br><span>{{ __('index.title') }}</span></h1>
                {{-- <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="icon-calendar mr-2"></span>{{ __('index.date') }}</p> --}}

            </div>
            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
                <form action="{{route('member')}}" class="request-form ftco-animate" method="POST">
                    @csrf
                    <h2 style="{{App::islocale('ar')? "    text-align: right;":""}}">{{ __('index.join') }}</h2>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="{{ __('index.name') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="{{ __('index.email') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="{{ __('index.phone') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" class="form-control" placeholder="{{ __('index.country') }}" required>
                    </div>
                    <div class="form-group">
                        <select name="education" class="form-control" required>
                            <option value="{{ __('index.school') }}">
                                {{ __('index.school') }}
                            </option>
                            <option value="{{ __('index.colleage') }}">
                                {{ __('index.colleage') }}
                            </option>
                            <option value="{{ __('index.university') }}">
                                {{ __('index.university') }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="type" class="form-control" required>
                            <option value="{{ __('index.public') }}">
                                {{ __('index.public') }}
                            </option>
                            <option value="{{ __('index.private') }}">
                                {{ __('index.private') }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group" style="{{App::islocale('ar')? "    text-align: right;":""}}">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" class="mr-2" required>
                                <a data-toggle="modal" href="#add_state">
                                    {{ __('index.terms') }}
                                    </a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{ __('index.joinNow') }}" class="btn btn-primary py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END  -->
<!-- BEGIN ADD_state MODEL -->
<div class="modal fade in" id="add_state">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('index.termsConditions') }}</h4>
            </div>
            <div class="modal-body">
                    <p>
                        {{ __('index.termsDescription') }}
                    </p>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END ADD_state MODEL -->

<!-- START Flaticon -->
<section class="ftco-section services-section bg-primary" style="padding: 2em 0;">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-placeholder"></span></div>
                    <div class="media-body">
                        {{-- <h3 class="heading mb-3">Venue</h3> --}}
                        {{-- <p> 203 Fake St. Mountain View, San Francisco, California, USA</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-world"></span></div>
                    <div class="media-body">
                        {{-- <h3 class="heading mb-3">Transport</h3> --}}
                        {{-- <p>A small river named Duden flows by their place and supplies.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-hotel"></span></div>
                    <div class="media-body">
                        {{-- <h3 class="heading mb-3">Hotel</h3> --}}
                        {{-- <p>A small river named Duden flows by their place and supplies.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-cooking"></span></div>
                    <div class="media-body">
                        {{-- <h3 class="heading mb-3">Restaurant</h3> --}}
                        {{-- <p>A small river named Duden flows by their place and supplies.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Flaticon -->

<!-- START Aboutus -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{asset('images/bg_b.jpg')}});">
            </div>
            <div class="col-md-7 wrap-about py-md-5 ftco-animate fadeInUp ftco-animated">
                <div class="heading-section mb-5 pt-5 pl-md-5">
                    <div class="pr-md-5 mr-md-5">
                        <h2 class="mb-4">
                            {{ __('index.about') }}
                        </h2>
                    </div>

                    <p style="{{App::islocale('ar')? "padding-right: 40px;":""}}">
                        {{$setting['about_'.App::getLocale()]}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Aboutus -->
<br>
<!-- START Tickets -->
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('index.ticket')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">{{__("index.price")}}</h2>
                        <span class="price"><sup>$</sup> <span class="number">100</span></span>

                        <h3 class="heading-2 my-4">{{__("index.features")}}</h3>

                        <ul class="pricing-text">
                            <li>{{__("index.feature1")}}</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-6 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">{{__("index.price")}}</h2>
                        <span class="price"><sup>$</sup> <span class="number">500</span></span>

                        <h3 class="heading-2 my-4">{{__("index.features")}}</h3>

                        <ul class="pricing-text">
                            <li>{{__("index.feature1")}}</li>
                            <li>{{__("index.feature2")}}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Tickets -->
<!-- START News -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>{{ __('index.news') }}</h2>
            </div>
        </div>

        <div class="row d-flex">
            @foreach ($blogs as $blog)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <img src="{{asset('images/'.$blog->photo)}}" alt="" srcset="">
                    <div class="text pt-4" style="{{App::islocale('ar')? "text-align: right;":""}}">
                            <div class="meta mb-3">
                            <div><a href="#">{{date('M j, Y', strtotime($blog->created_at))}}</a></div>
                        </div>
                        <h3 class="heading mt-2">
                            <a href="#">
                            {{$blog->title_ar}}
                            </a>
                        </h3>
                        <p>
                            {!! $blog['description_'.App::getLocale()] !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- END News -->
<!-- START Partners -->
<section class="ftco-section-parallax ftco-section ftco-no-pt">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">


            <div class="row d-flex justify-content-center">

                <div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
                    <h2>{{ __('index.sponsers') }}</h2>
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($sponsers as $sponser)
                            <div class="swiper-slide" style="background-image: url({{asset('images/'.$sponser->photo)}});">
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Partners -->

@endsection

@section('scripts')
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });

</script>
@endsection
