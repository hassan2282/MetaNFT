@extends('layouts.main')
    @section('title','login || register')
    @section('content')
        <!-- start page title area -->
        <div class="rn-breadcrumb-inner ptb--30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h5 class="title text-center text-md-start">Login&nbsp;&nbsp;||&nbsp;&nbsp;Register</h5>
                        @include('validations.validation')
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title area -->

        <!-- Register form -->
        <div class="login-area rn-section-gapTop">
            <div class="container">
                <div class="row g-5">
                    <div class="offset-1 col-lg-6 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                        <div class="form-wrapper-one registration-area">
                            <h4>Register</h4>
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="mb-5">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" id="Name" name="name" value="{{old('name')}}" required>
                                </div>
                                <div class="mb-5">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" id="exampleInputEmail1" name="email" required value="{{old('email')}}">
                                </div>
                                <div class="mb-5">
                                    <label for="newPassword" class="form-label">Create Password</label>
                                    <input type="password" id="newPassword" name="password" required>
                                </div>
                                <div class="mb-5">
                                    <label for="exampleInputPassword1" class="form-label">Re Password</label>
                                    <input type="password" id="exampleInputPassword1" name="password_confirmation" required>
                                </div>
                                <div class="g-recaptcha mb-4" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
                                <div style="display: flex">
                                    <button type="submit"  class="btn btn-primary mr--15">Register</button>
                                    <a href="{{route('google')}}" class="btn btn-danger">Google Account</a>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- End Register form -->


                    <!-- Login form -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="social-share-media form-wrapper-one">
                            <h4>Login</h4>
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="mb-5">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" id="exampleInputEmail1" name="email" required>
                                </div>
                                <div class="mb-5">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" id="exampleInputPassword1" name="password" required>
                                </div>
                                <div class="mb-5 rn-check-box">
                                    <input type="checkbox" class="rn-check-box-input" id="exampleCheck1" name="remember" required>
                                    <label class="rn-check-box-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <a href="{{route('password.request')}}">
                                    <p class="text-primary">Forget My Password</p>
                                </a>
                                <div style="display: flex">
                                    <button type="submit"  class="btn btn-primary mr--15">Log In</button>
                                    <a href="{{route('google')}}" class="btn btn-danger">Google Account</a>
                                </div>
                            </form>
                            </div>
                    </div>

                    <!-- End Login form -->

                </div>
            </div>
        </div>
    @endsection
