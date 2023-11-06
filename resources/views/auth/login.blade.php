{{-- @extends('layouts.master')


@section('title', 'login') --}}


{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/sign/css/style.css') }}">
</head>

<body
    style="height:100vh !important; background: linear-gradient(45deg, rgb(55, 191, 96), rgb(7, 23, 56), rgb(255, 192, 57));">
    <div class="main"
        style="padding:33px 0 0 0;background: linear-gradient(45deg, rgb(55, 191, 96), rgb(7, 23, 56), rgb(255, 192, 57));">
        <!-- Sing in  Form -->
        <section class="sign-in">

            <div class="container">
                <div style="text-align: center">
                    <a  class="navbar-brand" href="{{route('go-home')}}"><img src="{{asset('/assets/images/logo/logo2.png')}}" alt="logo"></a>
                </div>

                <div class="signin-content" style="padding: 30px">
                    <div class="signin-image " style="margin-top: 0">
                        <h1 style="text-align:left; margin:0"><i class="fa-solid fa-arrow-left" style="color: #000000;"></i> <a style=" color:black;" href="{{route('go-home')}}">Home</a></h1>

                        <figure style="margin-top:20px"><img src="{{ asset('/sign/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Don't have an account yet? Sign up!</a>
                    </div>

                    <div class="signin-form">
                        @if (session('warning'))
                            <div class="">
                                <p style="color: rgb(255, 172, 29);font-size: 20px;">{{ session('warning') }}</p>
                            </div>
                        @endif
                        <h2 class="form-title">Login</h2>


                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" id="your_name" placeholder="Your Name" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2"
                                    style="color: red; list-style-type: none; padding-left:2px;" />


                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="your_pass" placeholder="Password" name="password" required
                                    autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2"
                                    style="color: red; list-style-type: none; padding-left:2px;" />

                            </div>
                            {{-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term" name="remember"><span><span></span></span>Remember me</label>
                            </div> --}}
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="Log in" />
                            </div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </form>
                        <div style="margin-top: 30px; text-align:center">
                            <span class="social-label" style="font-size: 19px; font-family:Georgia, 'Times New Roman', Times, serif" > Or login with :</span>
                            <br>
                            <ul style="list-style-type: none; padding-left: 0px; display: inline-block;">
                                {{-- <li style="display: inline-block;"><a href="{{ route('auth.socilaite.redirect', 'facebook') }}"><i class="fa-brands fa-facebook-f fa-2xl" style="color: #478bff;"></i></i></a></li> --}}
                                <li style="display: inline-block; font-size: 17px"><a href="{{ route('auth.socilaite.redirect', 'github') }}"><i class="fa-brands fa-github fa-2xl"></i></a></li>
                                <li style="display: inline-block; padding-left:15px; font-size: 17px;"><a href="{{ route('auth.socilaite.redirect', 'google') }}"><i class="fa-brands fa-google fa-2xl" style="color: #ff2e2e;"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/sign/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/sign/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>


{{-- @endsection --}}



{{--
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    <div class="w-full flex items-center justify-center mx-2 mt-4 ">

        <a type="button" href="{{ route('auth.socilaite.redirect', 'google') }}"
            class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 18 19">
                <path fill-rule="evenodd"
                    d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
                    clip-rule="evenodd" />
            </svg>
            Sign in with Google
        </a>
    </div>
    <div class="w-full flex items-center justify-center mx-2 mt-4 ">

        <a type="button" href="{{ route('auth.socilaite.redirect', 'github') }}"
            class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                    clip-rule="evenodd" />
            </svg>
            Sign in with Github
        </a>
    </div>
    <div class="w-full flex items-center justify-center mx-2 mt-4 ">
        <a type="button" href="{{ route('auth.socilaite.redirect', 'facebook') }}"
            class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 8 19">
                <path fill-rule="evenodd"
                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                    clip-rule="evenodd" />
            </svg>
            Sign in with Facebook
        </a>
    </div>


</x-guest-layout>
</x-guest-layout> --}}
