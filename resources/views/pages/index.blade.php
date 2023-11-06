@extends('layouts.master')

@section('title', 'Home')
@section('home')
    class="active"
@endsection

@section('content')

    <!-- start page-wrapper -->
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
        <!-- start of hero -->
        <section class="hero-slider hero-style-1 hero-style-v2" style="height: 750px;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="assets/images/slider/slider9-transformed.jpeg">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>GO FOR HELP</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Helping hands, happy hearts.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Multiple Ways to Give: Donate Financially, Send Packages, Support Campaigns and donate packages
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{ route('donate-financial') }}" class="theme-btn">Financial donation<i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->



                    @if (session('success'))
                        <style>
                            .popup-warning {
                                position: fixed;
                                top: 15%;
                                left: 40%;
                                background-color: #19be03;
                                color: #ffffff;
                                padding: 20px 30px;
                                border-radius: 5px;
                                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                                opacity: 1;
                                transition: opacity 0.5s ease-in-out;
                            }

                            .popup-warning.fade-out {
                                opacity: 0;
                            }
                        </style>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var alert = document.createElement('div');
                                alert.className = 'popup-warning';
                                alert.textContent = "{{ session('success') }}";
                                document.body.appendChild(alert);

                                setTimeout(function() {
                                    alert.classList.add('fade-out');
                                }, 5000);

                                setTimeout(function() {
                                    alert.remove();
                                }, 10000);
                            });
                        </script>
                    @endif
                    @if (session('error'))
                        <style>
                            .popup-warning {
                                position: fixed;
                                top: 15%;
                                left: 40%;
                                background-color: #b90019;
                                color: #ffffff;
                                padding: 20px 30px;
                                border-radius: 5px;
                                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                                opacity: 1;
                                transition: opacity 0.5s ease-in-out;
                            }

                            .popup-warning.fade-out {
                                opacity: 0;
                            }
                        </style>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var alert = document.createElement('div');
                                alert.className = 'popup-warning';
                                alert.textContent = "{{ session('error') }}";
                                document.body.appendChild(alert);

                                setTimeout(function() {
                                    alert.classList.add('fade-out');
                                }, 5000);

                                setTimeout(function() {
                                    alert.remove();
                                }, 10000);
                            });
                        </script>
                    @endif


                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slider6.jpg">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>GO FOR HELP</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Volunteers ignite inspiration.
                                    </h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Help shape the future of our students through your donations.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{ route('donate-supplies') }}" class="theme-btn">Donate Supplies<i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slider4.jpg">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>GO FOR HELP</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Give your time, change lives.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Enrich your life while enriching the lives of students – Donate now.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{ route('donate-supplies') }}" class="theme-btn">Donate Supplies<i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->
                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- end of hero slider -->
        <section class="about-section about-section-s2 section-padding p-t-0" style="padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="video-area">
                            <img src="assets/images/about/st.jpg" alt height="550px">
                            {{-- <div class="video-holder">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"><i class="fi flaticon-play"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="about-text">
                            <div class="section-title">
                                <div class="thumb-text">
                                    <span>ABOUT US</span>
                                </div>
                                <h2>HopeHarbor is <span>Nonprofit</span> Organization <span>For Help</span> schoolchildren.
                                </h2>
                            </div>
                            <p>HopeHarbor is a passionate nonprofit organization committed to making a positive difference
                                in the lives of schoolchildren. Our mission is to provide hope, support, and opportunities
                                for academic success to underserved students.</p>
                            <div class="ab-icon-area">
                                <div class="about-icon-wrap">
                                    <div class="about-icon-item">
                                        <div class="ab-icon">
                                            <img draggable="false" src="assets/images/about/6.png" alt=""
                                                style="padding: 6px">
                                        </div>
                                        <div class="ab-text">
                                            <h2>Save <br> Children.</h2>
                                        </div>
                                    </div>
                                    <div class="about-icon-item">
                                        <div class="ab-icon ab-icon2">
                                            <img draggable="false" src="assets/images/about/4.png" alt="">
                                        </div>
                                        <div class="ab-text">
                                            <h2>Save <br> Education.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->
        <!-- features-area start -->
        <div class="features-area features-area2">
            <div class="container">
                <div class="col-12">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="donate-categories">How do you want to help?</h2>
                        <div class="features-wrap" style="padding:10px;">
                            <div class="row" style="display: flex; justify-content: center;">
                                <a href="{{ route('donate-financial') }}">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="features-item">
                                            <div class="features-icon">
                                                <img draggable="false"
                                                    src="{{ asset('assets/images/categories/fanical-donation-category.webp') }}"
                                                    alt="">
                                            </div>
                                            <div class="features-content">
                                                <h2><a href="{{ route('donate-financial') }}"> Financial <br>
                                                        <br><button
                                                            style="padding: 3px 10px; background-color:rgb(6,23,56); font-size:20px;">
                                                            <span>Donate Now</span>
                                                            <span class="fa-solid fa-arrow-right fa-sm"
                                                                style="color: #ffffff; display: inline-block; vertical-align:middle;"></span>
                                                        </button>

                                                    </a>
                                                </h2>
                                            </div>
                                            {{-- <div class="features-text1">{{$kit->description}}</div> --}}
                                        </div>
                                    </div>
                                </a>
                                @foreach ($catagories as $catagory)
                                    <a href="{{ route('go-causes', ['cat_id' => $catagory->id]) }}">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="features-item">
                                                <div class="features-icon">
                                                    <img draggable="false" src="{{ url('/images/' . $catagory->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="features-content">
                                                    <h2><a href="{{ route('go-causes', ['cat_id' => $catagory->id]) }}">{{ $catagory->title }}
                                                            <br>
                                                            <br><button
                                                                style="padding: 3px 10px; background-color:rgb(6,23,56); font-size:20px;">
                                                                <span>Donate Now</span>
                                                                <span class="fa-solid fa-arrow-right fa-sm"
                                                                    style="color: #ffffff; display: inline-block; vertical-align:middle;"></span>
                                                            </button>
                                                        </a>
                                                    </h2>
                                                </div>
                                                {{-- <div class="features-text1">{{$kit->description}}</div> --}}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                <a href="{{ route('donate-supplies') }}">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="features-item">
                                            <div class="features-icon">
                                                <img draggable="false"
                                                    src="{{ asset('assets/images/categories/supply-removebg-preview.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="features-content">
                                                <h2><a href="{{ route('donate-supplies') }}"> Supplies <br>
                                                        <br><button
                                                            style="padding: 3px 10px; background-color:rgb(6,23,56); font-size:20px;">
                                                            <span>Donate Now</span>
                                                            <span class="fa-solid fa-arrow-right fa-sm"
                                                                style="color: #ffffff; display: inline-block; vertical-align:middle;"></span>
                                                        </button>
                                                    </a>
                                                </h2>
                                            </div>
                                            {{-- <div class="features-text1">{{$kit->description}}</div> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features-area end -->
        <!-- case-area-start -->
        <div class="case-area section-padding">
            <div class="container">
                <div>
                    <div class="section-title section-title2 text-center">
                        <div class="thumb-text">
                            <span>KITS</span>
                        </div>
                        <h2>Popular kits of HopeHarbor.</h2>
                        <p>Explore our selection of popular kits designed for donors who want to make a meaningful
                            impact. These kits include essential resources and tools to support
                            school students. Donate now and make a difference!</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($kits->take(9) as $kit)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="cause-item">
                                <div class="cause-top">
                                    <div class="cause-img">
                                        <img src="{{ url('/images/' . $kit->image) }}" alt="">
                                        <div class="case-btn">
                                            <a href="{{ route('go-cause-single', ['cat_id' => $kit->category_id, 'kit' => $kit]) }}"
                                                class="theme-btn">More details
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cause-text">
                                    <ul>
                                        <li>
                                            <a
                                                href="{{ route('go-cause-single', ['cat_id' => $kit->category_id, 'kit' => $kit]) }}">${{ $kit->price }}</a>
                                        </li>
                                    </ul>
                                    <h3>
                                        <a
                                            href="{{ route('go-cause-single', ['cat_id' => $kit->category_id, 'kit' => $kit]) }}">{{ $kit->title }}</a>
                                    </h3>
                                    <p>{{ \Illuminate\Support\Str::limit($kit->description, 40, '...') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- case-area-end -->
        <!-- cta-area start -->
        <div class="cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="cta-left">
                            <h2>If You have any inquiry. Contact Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1 col-md-12 col-12">
                        <div class="cta-wrap">
                            <div class="cta-call">
                                <span>Call Us!</span>
                                <h3>0791757324</h3>
                            </div>
                            <div class="cta-call">
                                <span>E-mail Us!</span>
                                <h3>HopeHarbor@gmail.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area start -->
        <!-- event-area start -->
        <div class="event-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Campaigns</span>
                            </div>
                            <h2>Campaigns</h2>
                            <p>Explore urgent campaigns that promise to bring inspiration,
                                education, and joy to our community. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach ($campaigns as $campaign)
                            <span class="campaign_id" hidden style="display: none">{{ $campaign->id }}</span>
                            <div class="event-item"
                                style="grid-template-columns: 30% 70%; grid-template-rows: 200px; display: grid;">
                                <div class="event-img" style="">
                                    <img src="{{ url('/images/' . $campaign->image) }}" alt="">
                                </div>
                                <div class="event-text">
                                    <div class="event-left">
                                        <div class="event-l-text">
                                            @php
                                                $start_date = \Carbon\Carbon::parse($campaign->start_date);
                                            @endphp
                                            <span> {{ $start_date->format('F') }}</span>
                                            <h4> {{ $start_date->format('d') }}</h4>
                                        </div>
                                    </div>
                                    <div class="event-right">
                                        <ul>
                                            <li>End Date:{{ $campaign->end_date }}</li>
                                            <li class="target_money">Target Money: ${{ $campaign->target_money }}</li>
                                            <li id="{{ $campaign->id }}" style="margin-left:30px;" class="raised_money">
                                                Raised Money:
                                                ${{ $campaign->raised_money }}</li>
                                        </ul>
                                        @if ($campaign->raised_money >= $campaign->target_money)
                                            <script>
                                                var raised_money = document.getElementById('{{ $campaign->id }}');
                                                raised_money.style = "color: green; margin-left: 30px;";
                                                var checkMark = document.createElement('span');
                                                checkMark.innerHTML = ` <i class="fa-solid fa-check" style="color: #009912;"></i>`;
                                                raised_money.appendChild(checkMark);
                                            </script>
                                        @endif
                                        <div class="time-left">
                                            <span>Time left:</span>
                                            <h5 class="event-countdown" data-end-date="{{ $campaign->end_date }}"
                                                data-campaign-id="{{ $campaign->id }}"></h5>
                                        </div>
                                        <h2>
                                            <a
                                                href="{{ route('go-event-single', ['campaign' => $campaign]) }}">{{ $campaign->title }}</a>
                                        </h2>
                                        <p
                                            style="width: 60ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                            {{ \Illuminate\Support\Str::limit($campaign->description, 240, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="shape1"><img src="assets/images/event/1.png" alt=""></div>
            <div class="shape2"><img src="assets/images/event/2.png" alt=""></div>
        </div>
        <!-- event-area start -->
        <!-- volunteer-area start -->
        {{-- impotant dont delet this ************************************************************* --}}
        {{-- <div class="volunteer-area section-padding" >
            <div class="container">
                <div class="row">
                    <div>
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Volunteer</span>
                            </div>
                            <h2>Our Great Team</h2>
                            <p>Dedicated volunteers, diverse talents, one mission: making a difference together.</p>
                        </div>
                    </div>
                </div>
                <div class="volunteer-wrap" >
                    <div class="row">

                        <div class="col col-md-4 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/img (2).png" height="300px" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="">Nooraldeen Aloudat</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/img (1).png" height="300px" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="">Mohammad Alhouwari</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/img (5).png" height="300px" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Razan Mustafa</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-2 col-sm-6 custom-grid col-12"></div>

                        <div class="col col-md-4 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/img (3).png" height="300px" style="margin-top: 40px" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="">Raghad Bataineh</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/img (4).png" height="300px" style="margin-top: 40px" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="">Lama Nazzal</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- .tp-counter-area start -->
        <div class="section-title section-title2 text-center" style="margin: 100px 0 0 0; padding:0 !important;">
            <div class="thumb-text">
                <span>Achievements</span>
            </div>
            <h2>Our Achievements</h2>
            <p>Discover our remarkable journey and accomplishments.</p>
        </div>

        <div class="tp-counter-area">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="tp-counter-grids">
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="{{ $donation }}">00</span>+</h2>
                                </div>
                                <p>In-kind Donations</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="{{ $totalSum }}">00</span> <span
                                            style="font-size:50px ">$</span> </h2>
                                </div>
                                <p>Financial Donations</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="{{ $user }}">00</span>+</h2>
                                </div>
                                <p>Donaters</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="{{ $event }}">00</span>+</h2>
                                </div>
                                <p>Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-counter-area end -->
        <!-- volunteer-area start -->
        <!-- start testimonials-section-s2 -->



        {{-- <section class="testimonials-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="testimonials-slider">
                            <div class="testimonial-thumb-active">
                                <div class="test-img">
                                    <img src="assets/images/team/img (5).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (1).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (2).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (6).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (4).png" alt height="450px">
                                </div>
                            </div>
                            <div class="testimonial-content-active text-center">

                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to
                                        support a cause, organization, or community without expecting financial
                                        compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to
                                        make a positive impact on the world. They play a crucial role in various sectors,
                                        including nonprofit organizations, healthcare, education, environmental
                                        conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Razan Mustafa</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>


                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to
                                        support a cause, organization, or community without expecting financial
                                        compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to
                                        make a positive impact on the world. They play a crucial role in various sectors,
                                        including nonprofit organizations, healthcare, education, environmental
                                        conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Mohammad Alhouwari</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>


                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to
                                        support a cause, organization, or community without expecting financial
                                        compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to
                                        make a positive impact on the world. They play a crucial role in various sectors,
                                        including nonprofit organizations, healthcare, education, environmental
                                        conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Nooraldeen Aloudat</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>


                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to
                                        support a cause, organization, or community without expecting financial
                                        compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to
                                        make a positive impact on the world. They play a crucial role in various sectors,
                                        including nonprofit organizations, healthcare, education, environmental
                                        conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Raghad Bataineh</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>


                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to
                                        support a cause, organization, or community without expecting financial
                                        compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to
                                        make a positive impact on the world. They play a crucial role in various sectors,
                                        including nonprofit organizations, healthcare, education, environmental
                                        conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Lama Nazzal</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="testi-shape">
                <img src="assets/images/testimonials/img-3.png" alt="">
            </div>
            <div class="testi-shape2">
                <img src="assets/images/ts.png" alt="">
            </div>
        </section> --}}


        <!-- end testimonials-section-s2 -->
        <!-- blog-area start -->
        {{-- <div class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Blog</span>
                            </div>
                            <h2>Our Latest News</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="row">
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-1.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-4.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- blog-area start -->
        <!-- start partners-section -->
        <section class="partners-section ">
            <h4 style="color:#000000 !important; text-align:center; font-size:60px !important; padding: 60px 20px ">Our
                Partners</h4>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            @foreach ($Partners as $Partner)
                                <div class="grid">
                                    <img src="{{ url('/images/' . $Partner->image) }}" alt>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->

        <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
    @endsection
