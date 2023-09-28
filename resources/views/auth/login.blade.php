@extends('layouts.main')
@section('title','login Page')
@section('content')
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Login</h5>
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






{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
