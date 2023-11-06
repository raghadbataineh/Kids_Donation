@extends('layouts.master')

@section('title', 'Donate')

@section('content')

    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Donate Now</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Donate</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- tp-event-area start -->
        <div class="tp-donation-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-title section-title2 text-center" style="margin-bottom: 20px">
                            <div class="thumb-text">
                                <span>Donate</span>
                            </div>
                            <h2>Make a Donation</h2>
                            <div class="donation-content">

                                <div class="image">
                                    <img src="{{ url('/images/' . $kit->image) }}"" alt="" width="250px"
                                        style="padding: 10px">
                                </div>
                                <p><b>{{ $kit->title }}</b></p>
                                <div class="btns text-center">
                                    <button class="myBtn decreasePackageBtn"><i class="fa-solid fa-minus"></i></button>
                                    <span id="packageCount" style="padding: 10px; font-size: 25px">1</span>
                                    <button class="myBtn addPackageBtn"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <p style="font-weight: bold; color:black; margin-top:10px;" id="priceDesc">Price:
                                    ${{ $kit->price }}</p>
                            </div>
                        </div>
                        {{-- @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif --}}

                        <div id="Donations" class="tab-pane">

                            @if (Auth::id())
                                {{-- {{ session()->forget('currenturl') }} --}}
                                <form action="{{ route('payment') }}" method="POST">
                                    @csrf
                                    <div class="tp-donations-amount">
                                        <div class="tp-donations-amount" style="display: none">
                                            <h2>Your Donation (USD)</h2>
                                            <input class="package-price" id="package-price-input" type="hidden"
                                                class="form-control" name="amount" id="donation_option1"
                                                value="{{ $kit->price }}" readonly>
                                        </div>
                                        <div class="tp-donations-details">
                                            <h2>Details</h2>
                                            <div class="row">

                                                <input type="hidden" id="" name="UserId"
                                                    value="{{ Auth::id() }}">
                                                <input type="hidden" id="" name="kit"
                                                    value="{{ $kit->title }}">
                                                <input type="hidden" id="" name="type" value="kit">


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                    <input type="number" class="form-control" name="phone" id="phone"
                                                        placeholder="Phone" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                    <input type="text" class="form-control" name="adress" id="Adress"
                                                        placeholder="Adress" required>
                                                </div>
                                                <div class="col-lg-12 col-12 form-group">
                                                    <textarea required class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn submit-btn">Donate Now</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                {{-- @php
                                    $currenturl = url()->full();
                                    session(['currenturl' => $currenturl]);
                                    // dd(session('currenturl'));
                                @endphp --}}
                                <div class="tp-donations-amount " style="text-align: center;">
                                    <h2 class="mx-auto" style="color: red;">please login to continue your donation</h2>
                                    <a href="{{ route('donatelogin') }}" class="theme-btn-s3">LOGIN</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-event-area end -->

    </div>

@endsection


{{--

            if (session('Donate_login')) {
            return redirect()->route('go-donate', ['kit' => session('Donate_login')]);
        }

    --}}
