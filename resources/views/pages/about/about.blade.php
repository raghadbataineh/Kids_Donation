@extends('layouts.master')

@section('title', 'about us')
@section('about')
 class="active"
@endsection
@section('content')

<body>
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
        <!-- Start header -->

        <!-- end of header -->
        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>About Us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>About</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- end of hero slider -->
                <!-- end of hero slider -->
                <section class="about-section about-section-s2 section-padding p-t-0">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-5">
                                <div class="video-area">
                                    <img src="{{ asset('assets/images/about/st.jpg') }}" alt height="550px">
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
                                        <h2>HopeHarbor is <span>Nonprofit</span> Organization <span>For Help</span> schoolchildren.</h2>
                                    </div>
                                    <p>HopeHarbor is a passionate nonprofit organization committed to making a positive difference in the lives of schoolchildren. Our mission is to provide hope, support, and opportunities for academic success to underserved students.</p>
                                    <div class="ab-icon-area">
                                        <div class="about-icon-wrap">
                                            <div class="about-icon-item">
                                                <div class="ab-icon">
                                                    <img draggable="false" src="{{ asset('assets/images/about/6.png') }}" alt="" style="padding: 6px">
                                                </div>
                                                <div class="ab-text">
                                                    <h2>Save <br> Children.</h2>
                                                </div>
                                            </div>
                                            <div class="about-icon-item">
                                                <div class="ab-icon ab-icon2">
                                                    <img draggable="false" src="{{ asset('assets/images/about/4.png') }}" alt="">
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
                </section>        <!-- end about-section -->
        <!-- features-area start -->
        {{-- <div class="features-area">
            <div class="container">
                <div class="col-12">
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="features-text">
                            <div class="section-title">
                                <div class="thumb-text">
                                    <span>FEATURES</span>
                                </div>
                            </div>
                            <h2>The great journey to end poverty for good begins with a child.</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point that it has.</p>
                            <a href="#" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="features-wrap">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-1.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Cancer Treatment</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item-2">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-2.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Hospital Build</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item-2 active">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-3.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Environtment Recyle</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-4.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Food & Build Home</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- features-area end -->

        <!-- volunteer-area start -->
        {{-- <div class="volunteer-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Volunteer</span>
                            </div>
                            <h2>Our Great Volunteer</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="volunteer-wrap">
                    <div class="row">
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/1.png')}}" alt="">
                                </div>
                                <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                    <h2><a href="volunteer.html">Adriane Newby</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/2.png')}}" alt="">
                                </div>
                                <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                    <h2><a href="volunteer.html">Allene Castaneda</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/3.png')}}" alt="">
                                </div>
                                <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                    <h2><a href="volunteer.html">Malinda Willoughby</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/4.png')}}" alt="">
                                </div>
                                <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                    <h2><a href="volunteer.html">Wilburn Hatfield</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- volunteer-area start -->
        <!-- start testimonials-section-s2 -->
        <!-- start testimonials-section-s2 -->
        {{-- <section class="testimonials-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="testimonials-slider">
                            <div class="testimonial-thumb-active">
                                <div class="test-img">
                                    <img src="{{asset('assets/images/team/img (5).png')}} " alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="{{asset('assets/images/team/img (1).png')}}" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="{{asset('assets/images/team/img (2).png')}}" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="{{asset('assets/images/team/img (6).png')}}" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="{{asset('assets/images/team/img (4).png')}}" alt height="450px">
                                </div>
                            </div>
                            <div class="testimonial-content-active text-center">
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Razan Mustafa</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Mohammad Alhouwari</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Nooraldeen Aloudat</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Raghad Bataineh</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
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
                <img src="{{asset('assets/images/testimonials/img-3.png')}}" alt="">
            </div>
            <div class="testi-shape2">
                <img src="assets/images/ts.png" alt="">
            </div>
        </section> --}}
        <div
         style="background: linear-gradient(80deg,rgba(255, 192, 57, 0.542), rgba(55, 191, 96, 0.673),rgba(7, 23, 56, 0.466)); "
         >
            <div class="volunteer-area section-padding" >
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="section-title section-title2 text-center">
                                <div class="thumb-text">
                                    <span>Volunteer</span>
                                </div>
                                <h2>Our Great Team</h2>
                                <p style="color: black;">Dedicated volunteers, diverse talents, one mission: making a difference together.</p>
                            </div>
                        </div>
                    </div>
                    <div class="volunteer-wrap" >
                        <div class="row">
    
                            <div class="col col-md-4 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/img (2).png')}}" height="300px" alt="">
                                    </div>
                                    <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                        <h2><a>Nooraldeen Aloudat</a></h2>
                                        <span style="color: black;">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/img (1).png')}}" height="300px" alt="">
                                    </div>
                                    <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                        <h2><a>Mohammad Alhouwari</a></h2>
                                        <span style="color: black;">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/img (5).png')}}" height="300px" alt="">
                                    </div>
                                    <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                        <h2><a>Razan Mustafa</a></h2>
                                        <span style="color: black;">Volunteer</span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col col-md-2 col-sm-6 custom-grid col-12"></div>
    
                            <div class="col col-md-4 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/img (6).png')}}" height="300px" style="margin-top: 40px" alt="">
                                    </div>
                                    <div class="volunteer-content"  style="background-color:rgba(255, 255, 255, 0.16)">
                                        <h2><a>Raghad Bataineh</a></h2>
                                        <span style="color: black;">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/img (4).png')}}" height="300px" style="margin-top: 40px" alt="">
                                    </div>
                                    <div class="volunteer-content" style="background-color:rgba(255, 255, 255, 0.16)">
                                        <h2><a>Lama Nazzal</a></h2>
                                        <span style="color: black;" >Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- end testimonials-section-s2 -->
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
                                    <div class="grid" >
                                        <div>
                                            <h2><span class="odometer" data-count="{{$donation}}">00</span>+</h2>
                                        </div>
                                        <p>In-kind Donations</p>
                                    </div>
                                    <div class="grid" >
                                        <div>
                                            <h2><span class="odometer" data-count="{{$totalSum}}">00</span> <span style="font-size:50px " >$</span> </h2>
                                        </div>
                                        <p>Financial Donations</p>
                                    </div>
                                    <div class="grid" >
                                        <div>
                                            <h2><span class="odometer" data-count="{{$user}}">00</span>+</h2>
                                        </div>
                                        <p>Donaters</p>
                                    </div>
                                    <div class="grid">
                                        <div>
                                            <h2><span class="odometer" data-count="{{$event}}">00</span>+</h2>
                                        </div>
                                        <p>Campaigns</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- .tp-counter-area end -->
        <!-- start partners-section -->
        <!-- start partners-section -->
        <section class="partners-section ">
            <h4 style="color:#513d2f !important; text-align:center; font-size:50px !important; padding:60px 20px">Our Partners</h4>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            @foreach ($Partners as $Partner)
                            <div class="grid">
                                <img src="{{url('/images/' .$Partner->image)}}" alt>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <!-- end partners-section -->
        <!-- end partners-section -->
        <!-- start tp-site-footer -->

        <!-- end tp-site-footer -->
    </div>


@endsection
