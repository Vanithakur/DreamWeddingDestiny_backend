@extends('layouts.guest')
@section('title', 'Login Page')
@section('header')
    @include('inludes.header')
@endsection
@section('content')
    <section class="contact_section ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box p-5 m-3">
                        <img src="images/offer-img.png" class="box_img" alt="register img">
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="form_container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="email" name="email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Your password" />
                                </div>
                            </div>
                            <div class="btn btn-sm">
                                <button type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
    </form>
@endsection
@section('footer')
    @include('inludes.footer')
@endsection
