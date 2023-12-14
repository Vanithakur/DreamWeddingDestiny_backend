@extends('layouts.default')
@push('style')
@endpush

@section('title', 'Dashboard Page')

@section('content')
    <div class="row ">
    <div class="info-box col-md-3 ml-3 mt-3">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Total Tickets</span>
            <span class="info-box-number"></span>
        </div>
    </div>
    <div class="info-box col-md-2 ml-3 mt-3">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Open </span>
            <span class="info-box-number"></span>
        </div>
    </div>
    <div class="info-box col-md-2 ml-3 mt-3">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Closed </span>
            <span class="info-box-number"></span>
        </div>
    </div>
    <div class="info-box col-md-3 ml-3 mt-3">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Not assigned</span>
            <span class="info-box-number"></span>
        </div>
    </div>
</div>
@endsection

@push('script')
@endpush
