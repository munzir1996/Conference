@extends('layouts.master')
@section('styles')
<style>
</style>
@endsection
@section('content')

{{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('images/bg_d.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-3 bread">Contact</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section> --}}
<br>
      <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h3">{{ __('contact.contactInfo') }}</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-4">
          <p><span>{{ __('contact.address') }}</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
        <div class="col-md-4">
          <p><span>{{ __('contact.phone') }}</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
        <div class="col-md-4">
          <p><span>{{ __('contact.titleEmail') }}</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="{{ __('contact.name') }}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="{{ __('contact.email') }}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="{{ __('contact.subject') }}">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{ __('contact.message') }}"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="{{ __('contact.sendMessage') }}" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

      </div>
    </div>
  </section>

@endsection

@section('scripts')
<script>

</script>
@endsection
