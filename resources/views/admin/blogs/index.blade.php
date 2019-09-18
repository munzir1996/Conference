@extends('admin.layouts.master')
@section('title', 'الأخبار')
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
            <a href="{{route('blogs.index')}}">الأخبار</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> الأخبار </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الأخبار</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_blog"> أضافة خبر
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="blogs-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>العنوان</th>
                        <th>Title</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->title_ar}}</td>
                        <td>{{$blog->title_en}}</td>
                        <td>
                            <form action="{{route('blogs.destroy', $blog->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('blogs.edit', $blog->id)}}"
                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> تعديل </i>
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

<!-- BEGIN ADD_blog MODEL -->
<div class="modal fade in" id="add_blog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة خبر</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" name="title_ar" class="form-control" placeholder="العنوان" required>

                        <label>التفاصيل</label>
                        <textarea name="description_ar" class="form-control ck_editor" >{{old('description_ar')}}</textarea>

                        <label>Title</label>
                        <input type="text" name="title_en" class="form-control" placeholder="Title" required>

                        <label>Description</label>
                        <textarea name="description_en" class="form-control ck_editor" >{{old('description_en')}}</textarea>

                        <label>صورة</label>
                        <input id="photo" type="file" name="photo">

                    </div>
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_blog MODEL -->


@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/adminjs/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#blogs-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->





