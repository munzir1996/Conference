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

</style>
@endsection
@section('content')
<!-- START  -->


{{-- {{ App::getlocale()}} --}}
<div class="hero-wrap" style="background-image: url({{asset('images/bg_a.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> {{ __('index.subtitle') }}
                    <br><span>{{ __('index.title') }}</span></h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="icon-calendar mr-2"></span>{{ __('index.date') }}</p>

            </div>
            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
                <form action="#" class="request-form ftco-animate">
                    <h2>{{ __('index.join') }}</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('index.name') }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('index.email') }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('index.phone') }}">
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

<!-- START Flaticon -->
<section class="ftco-section services-section bg-primary">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-placeholder"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Venue</h3>
                        <p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-world"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Transport</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-hotel"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Hotel</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-cooking"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Restaurant</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
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
                        <h2 class="mb-4">{{ __('index.about') }}</h2>
                    </div>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would have been rewritten a thousand times and everything that was left from its origin would be
                        the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                        But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for their.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Aboutus -->
<!-- START News -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>{{ __('index.news') }}</h2>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{asset('images/image_1.jpg')}});">
                    </a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div><a href="#">July. 14, 2019</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{asset('images/image_2.jpg')}});">
                    </a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div><a href="#">July. 14, 2019</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{asset('images/image_3.jpg')}});">
                    </a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div><a href="#">July. 14, 2019</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
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
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
                            <div class="swiper-slide" style="background-image: url({{asset('images/OmegaTeam.jpg')}});">
                            </div>
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
