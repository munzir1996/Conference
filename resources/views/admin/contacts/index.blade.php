@extends('admin.layouts.master')
@section('title', 'التواصل')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->

@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('contacts.index')}}">التواصل</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> التواصل </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول التواصل</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        {{-- <button data-toggle="modal" class="btn sbold green" href="#add_contact"> أضافة عضو
                            <i class="fa fa-plus"></i>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="contacts-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الأسم</th>
                        <th>الأيميل</th>
                        <th>المشاركة</th>
                        <th>العنوان</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->join}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>
                            <form action="{{route('contacts.destroy', $contact->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('contacts.show', $contact->id)}}"
                                    class="btn primary btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-eye"> عرض </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit">حذف</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/adminjs/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#contacts-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->





