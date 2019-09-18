@extends('layouts.master')
@section('styles')
<style>
</style>
@endsection
@section('content')

<br>
      <section class="ftco-section contact-section">
    <div class="container" >
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h3">
              {{ __('contact.contactInfo') }}
            </h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-4">
          <p><span>{{ __('contact.address') }}: </span>{{$setting['location_'.App::getLocale()]}}</p>
        </div>
        <div class="col-md-4">
          <p><span>{{ __('contact.phone') }}: </span> <a href="#">{{$setting->phone}}</a></p>
        </div>
        <div class="col-md-4">
          <p><span>{{ __('contact.titleEmail') }}: </span> <a href="#">{{$setting->email}}</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-8 order-md-last d-flex">
          <form action="{{route('join')}}" class="bg-light p-5 contact-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="{{ __('contact.name') }}" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="{{ __('contact.email') }}" required>
            </div>
            <div class="form-group">
                <p>
                    {{ __('contact.question') }}
                </p>
                <select name="join" class="form-control" required>
                    <option value="No">
                        {{ __('contact.no') }}
                    </option>
                    <option value="Yes">
                        {{ __('contact.yes') }}
                    </option>
                </select>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="{{ __('contact.subject') }}" required>
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="{{ __('contact.message') }}" required></textarea>
            </div>
            <div class="form-group">
                <input id="file" type="file" name="file">
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
