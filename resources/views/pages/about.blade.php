@extends('layouts.default')
@section('title', 'About Page')

@section('header')
    @include('includes.header')
@endsection
@section('content')
    <!-- about section -->
    <section class="about_section layout_padding ">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Our Company
                            </h2>
                        </div>
                        <p>
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English. Many desktop publishing
                            packages and web pagend web page editors now use Lorem Ipsum as their default model text, </p>
                        <a href="#">
                            <span>
                                Read More
                            </span>
                            <img src="images/color-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
@endsection
@section('footer-info-section')
    @include('includes.footer-info-section')
@endsection
@section('footer')
    @include('includes.footer')
@endsection
