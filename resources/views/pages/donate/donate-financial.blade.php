@extends('layouts.master')

@section('title', 'Donate')

@section('financial')
    class="active"
@endsection

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
                                    <li>Donate-Financial</li>
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
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Financial</span>
                            </div>
                            <h2>Make a Financial Donation</h2>
                            <p>Support education by making a financial donation for school kits! Your contribution ensures
                                underprivileged students have the essential tools for learning, empowering them for a
                                brighter future. Join us in making a difference today!</p>
                            <div class="image">
                            </div>
                        </div>
                        <div id="Donations" class="tab-pane">

                            @if (Auth::id())
                                <form action="{{ route('payment') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="" name="UserId" value="{{ Auth::id() }}">
                                    <input type="hidden" id="" name="kit" value="financial support">
                                    <input type="hidden" id="" name="type" value="financial">
                                    <div class="tp-donations-amount">
                                        <div class="tp-donations-amount">
                                            <h2>Donate with a custom amount(USD)</h2>
                                            <div id="custom_amount_input">
                                                <input type="number" class="form-control" name="amount" id="custom_amount"
                                                    placeholder="Enter Custom Donation Amount" min="1">
                                            </div>
                                        </div>
                                        <div class="tp-donations-details">
                                            <h2>Details</h2>
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                    <input type="number" class="form-control" name="phone" id="phone"
                                                        placeholder="Phone" required min="0">
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
                                <div class="tp-donations-amount " style="text-align: center;">
                                    <h2 class="mx-auto" style="color: red;">please login to continue</h2>
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
