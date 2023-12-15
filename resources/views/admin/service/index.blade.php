@extends('layouts.dashboard')

@push('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('modules/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('modules/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('title', 'Service List Page')


@section('content')

    @php
        $user = auth()->user();
    @endphp

    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning">{{ session('warning') }}</div>
        @endif

        @if ($user->role_type == '0')
            <a href="{{ route('service.create') }}"><button class="btn btn-success mt-3 mb-3"> Add Service </button></a>
        @endif
        <div class="card mt-3">
            <div class="card-header ">

                <h3 class="card-title ">Service List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped mt-3" id="example1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    </div>


@endsection

@push('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('modules/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $(function() {

                var Url = $(location).attr('href');
                var table = $('#example1').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: Url,
                    },
                    columns: [{
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ],
                    columnDefs: [{
                        "targets": 1,
                        "orderable": false
                    }]
                });

                table.draw();
            });

        });
    </script>
@endpush
