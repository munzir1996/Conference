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
            <a href="{{route('blogs.index')}}">الأخبار</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الأخبار </h3>

<form action="{{ route('blogs.update', $blog->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="title_ar" class="form-control" value="{{$blog->title_ar}}" required>
    </div>
    <div class="form-group">
        <label>التفاصيل</label>
        <textarea name="description_ar" class="form-control ck_editor" >{{$blog->description_ar}}</textarea>
    </div>

    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title_en" class="form-control" value="{{$blog->title_en}}" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description_en" class="form-control ck_editor" >{{$blog->description_en}}</textarea>
    </div>

    <!-- IMAGE -->
    <label>صورة</label>
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-new">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="photo" name="photo">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>

    <label>Old Photo</label>
    <div class="form-group">
        <img src="{{asset('images/'.$blog->photo)}}" alt="" srcset="">
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection
