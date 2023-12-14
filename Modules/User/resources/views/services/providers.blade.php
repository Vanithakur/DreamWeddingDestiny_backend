@extends('user::layouts.default')

@push('style')
@endpush

@section('title', 'Providers Page')

@section('content')
    @foreach ($data as $provider)
        <div class="row p-2">
            <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user shadow">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">{{ optional($provider->provider)->firstname ?? 'No Provider' }}</h3>
                        <h5 class="widget-user-desc">{{ $provider->name }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src=" {{ asset('modules/user/dist/img/user1-128x128.jpg') }}"
                            alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">Reviews</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">Contact</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <a href=""><span class="description-text">Visit Site</span></a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
        </div>
    @endforeach

@endsection

@push('script')
@endpush