@extends('layouts.guest')
@section('title', 'Register Page')
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="firstname" class="form-control"
                                        placeholder="Your first name" />
                                </div>
                                <div class="form-group col">
                                    <input type="text" name="lastname" class="form-control"
                                        placeholder="Your last name" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="mobile_number" class="form-control"
                                        placeholder="Your phone number" />
                                </div>
                            </div>
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
                                <div class="form-group col">
                                    <input type="password" name="c_password" class="form-control"
                                        placeholder="Your confirm password" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="role">Select Role:</label>
                                    <select id="role" name="role">
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="employee">Employee</option>
                                        <option value="other_role">Other Role</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="gender">Select Gender:</label>
                                    <select id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn btn-sm">
                                <button type="submit">
                                    Register
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
