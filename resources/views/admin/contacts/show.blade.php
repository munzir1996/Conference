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
            <a href="{{route('contacts.index')}}">الرسائل</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<div class="row">
        <div class="col-md-12">
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-diamond"></i>الرسالة</div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_tab_3" data-toggle="tab" aria-expanded="true">البيانات</a>
                        </li>
                        {{-- <li class="">
                            <a href="#portlet_tab_2" data-toggle="tab" aria-expanded="false"> Tab 2 </a>
                        </li>
                        <li class="">
                            <a href="#portlet_tab_1" data-toggle="tab" aria-expanded="false"> Tab 1 </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        {{-- <div class="tab-pane" id="portlet_tab_1">

                        </div>
                        <div class="tab-pane" id="portlet_tab_2">

                        </div> --}}
                        <div class="tab-pane active" id="portlet_tab_3">
                            <b>الأسم: </b> {{$contact->name}}
                            <br>
                            <br>
                            <b>الأيميل: </b> {{$contact->email}}
                            <br>
                            <br>
                            <b>الأنضمام: </b> {{$contact->join}}
                            <br>
                            <br>
                            <b>الموضوع: </b> {{$contact->subject}}
                            <br>
                            <br>
                            <b>الرسالة: </b> {{$contact->message}}
                            <br>
                            <br>
                            <hr>
                            @if ($contact->file != null)
                            <a href="{{asset('files/'.$contact->file)}}">{{$contact->file}}</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
