<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/sign/css/style.css')}}">
</head>
<body style="height:100vh !important ;background: linear-gradient(45deg, rgb(55, 191, 96), rgb(7, 23, 56), rgb(255, 192, 57));">

    <div class="main" style="padding:50px 0 0 0;background: linear-gradient(45deg, rgb(55, 191, 96), rgb(7, 23, 56), rgb(255, 192, 57));">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div style="text-align: center">
                    <a  class="navbar-brand" href="{{route('go-home')}}"><img src="{{asset('/assets/images/logo/logo2.png')}}" alt="logo"></a>
                </div>
                <div class="signup-content" style="padding: 20px ">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name":value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" :value="old('email')" required autocomplete="username"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; list-style-type: none; padding-left:2px;"/>

                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"  required autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; list-style-type: none; padding-left:2px;" />

                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" id="re_pass" placeholder="Repeat your password" name="password_confirmation" required autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red; list-style-type: none; padding-left:2px;"/>

                            </div>
                            <div></div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                            {{-- <div style="margin-top: 25px; text-align:center">
                                <span class="social-label" style="font-size: 19px; font-family:Georgia, 'Times New Roman', Times, serif" > Or Signup with :</span> 
                                <br>
                                <ul style="list-style-type: none; padding-left: 0px; display: inline-block;">
                                    <li style="display: inline-block; font-size: 17px"><a href="{{ route('auth.socilaite.redirect', 'github') }}"><i class="fa-brands fa-github fa-2xl"></i></a></li>
                                    <li style="display: inline-block; padding-left:15px; font-size: 17px;"><a href="{{ route('auth.socilaite.redirect', 'google') }}"><i class="fa-brands fa-google fa-2xl" style="color: #ff2e2e;"></i></a></li>
                                </ul>
                            </div> --}}
                
                            
                        </form>
                    </div>
                    <div class="signup-image" style="margin-top: 0">
                        <h1 style="text-align:right; margin:0"><i class="fa-solid fa-arrow-left" style="color: #000000;"></i> <a style="color:black;" href="{{route('go-home')}}">Home</a></h1>
                        <figure style="margin-top:20px"><img src="{{asset('/sign/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">Do you have account? Login Now</a>
                    </div>
                </div>
            </div>
    </div>

    <!-- JS -->
    <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>

    <script src="{{asset('/sign/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/sign/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>











{{-- 
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
</x-guest-layout>
</x-guest-layout> --}}
