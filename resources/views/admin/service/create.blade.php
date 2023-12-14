@extends('admin::layouts.default')

@push('style')
@endpush

@section('title', 'Business Setup Form')


@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Business Setup Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="ticketForm" action="{{ route('business.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Business Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            value="{{ old('name') }}" placeholder="Enter ticket title">
                                        @error('name')
                                            <div class="invalid-feedback"></div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="service">Service</label>
                                        <select name="service" id="service"
                                            class="form-control @error('service') is-invalid @enderror">
                                            <option value="">Select Service</option>
                                            <option value="1">Food</option>
                                            <option value="2">Decoration</option>
                                            <option value="3">Photography</option>
                                        </select>
                                        @error('service')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Contact Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            value="{{ old('email') }}" placeholder="Enter Business Contact email">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="mob_number">Contact Number</label>
                                        <input type="text" name="mob_number"
                                            class="form-control @error('mob_number') is-invalid @enderror" id="mob_number"
                                            value="{{ old('mob_number') }}" placeholder="Enter Business Contact Number">
                                        @error('mob_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address"
                                            class="form-control @error('address') is-invalid @enderror" id="address"
                                            value="{{ old('address') }}" placeholder="Enter Business Address">
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href=" "><input type="button" class="btn btn-primary"
                                            value="Cancel"></input></a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    @endsection

    @push('script')
        <!-- jquery-validation -->
        <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/ticket.js') }}"></script>
    @endpush
