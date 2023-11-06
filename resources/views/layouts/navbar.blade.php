<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon.png">
    <meta name="author" content="wpoceans">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

</head>

<body>

<!-- Start header -->
        <header id="header" class="tp-site-header header-style-2">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a style="margin-right:70px; " class="navbar-brand" href="{{route('go-home')}}"><img src="{{asset('/assets/images/logo/logo.png')}}" alt="logo">Hope<span>Harbor.</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a @yield('home') href="{{route('go-home')}}" style="margin-right:15px; ">Home</a>
                            </li>
                            <li><a  @yield('about')  href="{{route('go-about')}}">About</a> </li>
                            <li><a  @yield('supply') href="{{route('donate-supplies')}}">Donate supplies</a></li>
                            {{-- <li class="menu-item-has-children">
                                <li><a href="{{ route('go-ca uses', ['cat_id' => 1]) }}">Kits</a></li>
                            </li> --}}
                            <li class="menu-item-has-children">
                                <a @yield('event') href="{{route('go-events')}}">Campaigns</a>
                            </li>
                            <li>
                                <a @yield('contact') href="{{route('go-contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="cart-search-contact">
                        {{-- <div class="header-search-form-wrapper">
                            <button class="search-toggle-btn"><i class="fi flaticon-magnifying-glass"></i></button>
                            <div class="header-search-form">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <button type="submit"><i class="fi flaticon-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="vollenter-btn">
                            <a class="theme-btn-s2" href="{{route('go-volunteer')}}">Start a campaign</a>
                        </div>
                        {{-- <div class="vollenter-btn">
                            <a class="theme-btn-s2" href="{{route('go-volunteer')}}">Login</a>
                        </div>
                        <div class="vollenter-btn">
                            <a class="theme-btn-s2" href="{{route('go-volunteer')}}">Register</a>
                        </div> --}}
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/profile') }}" class="theme-btn-s2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="margin: 0 10px">Profile</a>
                                <div class="vollenter-btn">
                                    <a class="theme-btn-s2" style="background:#e9bf3d;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @else
                            <div class="vollenter-btn">
                                <a class="theme-btn-s2" href="{{ route('login') }}">Login</a>
                            </div>
                                @if (Route::has('register'))
                                <div class="vollenter-btn">
                                    <a class="theme-btn-s2" href="{{ route('register') }}">Register</a>
                                </div>
                                @endif
                            @endauth
                    @endif

                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
@php
    $currenturl = url()->full();
    session(['currenturl' => $currenturl]);
@endphp
