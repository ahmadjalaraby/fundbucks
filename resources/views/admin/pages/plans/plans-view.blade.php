@extends('admin.index')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
@endsection

@section('scripts')

    <script type="text/javascript">
        {{--$(function () {--}}
        {{--    var table = $('.table').DataTable({--}}
        {{--        processing: true,--}}
        {{--        serverSide: true,--}}
        {{--        ajax: {--}}
        {{--            url: "{{ route('plans.index') }}",--}}
        {{--            data: function (d) {--}}
        {{--                d.status = $('#status').val(),--}}
        {{--                    d.search = $('input[type="search"]').val()--}}
        {{--            }--}}
        {{--        },--}}
        {{--        columns: [--}}
        {{--            {data: 'id', name: 'id'},--}}
        {{--            {data: 'name', name: 'name'},--}}
        {{--            {data: 'email', name: 'email'},--}}
        {{--            {data: 'status', name: 'status'},--}}
        {{--        ]--}}
        {{--    });--}}

        {{--    $('#status').change(function () {--}}
        {{--        table.draw();--}}
        {{--    });--}}
        {{--});--}}
    </script>

    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>

@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
            <li class="breadcrumb-item active" aria-current="page">عرض العضويات</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="form-group mb-5 d-flex flex-row align-items-center justify-content-between">
                        <span class="fs-5 fw-semibold">قائمة العضويات</span>
                        <button type="button" class="btn btn-primary btn-icon-text text-end">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            إضافة عضوية جديدة
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table table-hover mt-1">
                            <thead>
                            <tr class="align-center">
                                <th>الاسم</th>
                                <th>نوع العضوية</th>
                                <th>نوع العائد</th>
                                <th>العائد المتوقع</th>
                                <th>تاريخ الإضافة</th>
                                <th>مفعل</th>
                                <th class="w-25">ملاحظات</th>
                                <th>الإجراء</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>محفظة استثمار</td>
                                <td>محفظة استثمار</td>
                                <td>تراكمي</td>
                                <td>13%</td>
                                <td>2011/04/25</td>
                                <td><span class="badge bg-info">معلق</span></td>
                                <td class="w-25">
                                    ارباح نصف سنوية ( ستة أشهر ) بنسبة ١٣% تراكمية  النمو يتم سحبها بعد انقضاء المدة او اضافتها لرأس المال لاعادة ضبط قيمة الاستثمار الاولي من جديد
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-icon">
                                        <i data-feather="eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-icon">
                                        <i data-feather="edit-2"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-icon">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





