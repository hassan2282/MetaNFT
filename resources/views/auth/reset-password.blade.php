@extends('layouts.main')
@section('title','Reset Password Page')
@section('content')
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Reset Password</h5>
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
                    <form method="POST" action="{{ route('password.update') }}">
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        @csrf
                        <div class="form-wrapper-one">

                            <div class="logo-thumbnail logo-custom-css mb--50">
                                <a class="logo-light" href="/"><img src="{{asset('/assets/images/logo/logo-white.png')}}" alt="nft-logo"></a>
                                <a class="logo-dark" href="/"><img src="{{asset('/assets/images/logo/logo-dark.png')}}" alt="nft-logo"></a>
                            </div>

                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" value="{{$request->email}}" id="exampleInputEmail1" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-5">
                                <label for="newPassword" class="form-label">Create Password</label>
                                <input type="password" id="newPassword" name="password" required>
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Re Password</label>
                                <input type="password" id="exampleInputPassword1" name="password_confirmation" required>
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

{{--        <x-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('password.update') }}">--}}
{{--            @csrf--}}

{{--            <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

{{--            <div class="block">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Reset Password') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
