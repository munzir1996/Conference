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
            <a href="{{route('members.index')}}">الأعضاء</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الأعضاء </h3>

<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="name" class="form-control" value="{{$member->name}}" required>
    </div>
    <div class="form-group">
        <label>البريد الألكتروني</label>
        <input type="email" name="email" class="form-control" value="{{$member->email}}" required>
    </div>
    <div class="form-group">
        <label>رقم الهاتف</label>
        <input type="text" name="phone" class="form-control" value="{{$member->phone}}" required>
    </div>
    <div class="form-group">
        <label>الدولة</label>
        <input type="text" name="country" class="form-control" value="{{$member->country}}" required>
    </div>
    <div class="form-group">
        <label>التعليم</label>
        <input type="text" name="education" class="form-control" value="{{$member->education}}" required>
    </div>
    <div class="form-group">
        <label>النوع</label>
        <input type="text" name="type" class="form-control" value="{{$member->type}}" required>
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection
