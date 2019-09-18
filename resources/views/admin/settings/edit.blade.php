@extends('admin.layouts.master')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('settings.index')}}">الأعدادات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الأعدادات </h3>

<form action="{{ route('settings.update', $setting->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>من نحن</label>
        <textarea name="about_ar" class="form-control ck_editor" >{{$setting->about_ar}}</textarea>
    </div>
    <div class="form-group">
        <label>About us</label>
        <textarea name="about_en" class="form-control ck_editor" >{{$setting->about_en}}</textarea>
    </div>
    <div class="form-group">
        <label>رقم الهاتف</label>
        <input type="text" name="phone" class="form-control" value="{{$setting->phone}}" required>
    </div>
    <div class="form-group">
        <label>الأيميل</label>
        <input type="email" name="email" class="form-control" value="{{$setting->email}}" required>
    </div>
    <div class="form-group">
        <label>المكان</label>
        <input type="text" name="location_ar" class="form-control" value="{{$setting->location_ar}}" required>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location_en" class="form-control" value="{{$setting->location_en}}" required>
    </div>

    <!-- IMAGE -->
    <label>الشعار</label>
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-new">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="logo_ar" name="logo_ar">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>

    <label>الشعار القديم</label>
    <div class="form-group">
        <img src="{{asset('images/'.$setting->logo_ar)}}" alt="" srcset="">
    </div>

    <!-- IMAGE -->
    <label>Logo</label>
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-new">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="logo_en" name="logo_en">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>

    <label>Old Logo</label>
    <div class="form-group">
        <img src="{{asset('images/'.$setting->logo_en)}}" alt="" srcset="">
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection
