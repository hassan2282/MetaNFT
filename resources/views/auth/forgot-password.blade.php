@extends('layouts.main')
@section('title','Forgot Password Page')
@section('content')
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Forget Password</h5>
                    @include('validations.validation')
                    @if (session('status'))
                        <div class="mt-4 bg-success text-white rounded p-2">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <div class="forget-password-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-4 col-lg-4">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-wrapper-one">

                            <div class="logo-thumbnail logo-custom-css mb--50">
                                <a class="logo-light" href="/"><img src="assets/images/logo/logo-white.png" alt="nft-logo"></a>
                                <a class="logo-dark" href="/"><img src="assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                            </div>

                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" value="{{old('email')}}" id="exampleInputEmail1" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-5">
                                <input type="checkbox" class="rn-check-box-input" id="exampleCheck1">
                                <label class="rn-check-box-label" for="exampleCheck1">I agree to the <a href="/policy">privacy policy</a> </label>
                            </div>

                            <div class="mb-5">
                                <button type="submit" class="btn btn-large btn-primary">Send</button>
                            </div>

                            <span class="mt--20 notice">Note: We will send a password to your email</span>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection







{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <div class="mb-4 text-sm text-gray-600">--}}
{{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--        </div>--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('password.email') }}">--}}
{{--            @csrf--}}

{{--            <div class="block">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Email Password Reset Link') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
