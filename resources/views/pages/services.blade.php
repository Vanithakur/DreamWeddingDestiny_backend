@extends('layouts.default')
@section('title', 'Services Page')

@section('header')
    @include('includes.header')
@endsection
@section('content')
    <!-- chocolate section -->
    <section class="chocolate_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our chocolate products
                </h2>
                <p>
                    Many desktop publishing packages and web pagend web page editors now use Lorem Ipsum as their
                </p>
            </div>
        </div>
        <div class="container">
            <div class="chocolate_container">
                @foreach ($servicesInfo as $service)
                    <div class="box">
                        <div class="img-box">
                            <img src="images/chocolate1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                Yummy <span>chocolate {{ $service->name }}</span>
                            </h6>
                            <h5>
                                $5.0
                            </h5>
                            <a href="">
                                BUY NOW
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end chocolate section -->
@endsection
@section('footer-info-section')
    @include('includes.footer-info-section')
@endsection
@section('footer')
    @include('includes.footer')
@endsection
