@extends('layouts.master')

@section('title', 'Events')

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

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Start a campaign</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>Start a campaign</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- volunteer-area-start -->
        <div class="volunteer-area ">
            <div class="volunteer-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title section-title2 text-center">
                                <div class="thumb-text">
                                    <span>Help</span>
                                </div>
                                <h2>Help people by starting a campaign</h2>
                                <p>At our platform, only official and authenticated organizations have the privilege to initiate campaigns, ensuring a secure and trusted environment for positive change. Join us in making a difference!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="volunteer-item">
                                <div class="volunteer-img-wrap">
                                    <div class="volunter-img">
                                        <h4>Choose a campaign image</h4>
                                        <img src="{{asset('assets/images/event/default-campaign-image.jpg')}}" alt="" id="campaignImage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="volunteer-contact">
                                <div class="volunteer-contact-form">
                                    <form method="post" class="contact-validation-active" id="contact-form" enctype="multipart/form-data" action="{{ route('sendData') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Full name" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Campaign title" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Upload campaign Image</label>
                                                <input id="file" type="file" class="form-control createCampaignImage" name="image" required>
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="number" class="form-control" name="targetMoney" id="targetMoney" placeholder="Target money (USD)" required min="50">
                                                <small style="font-size: 14px">$50 or more</small>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="note" id="note" placeholder="Campaign Description..."></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in" style="width: 100%">
                                                <label for="pdf-file">Notarized Documents</label>
                                                <input id="pdf-file" type="file" class="form-control campaignPdfFile" name="authPdfFile" required>
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            <div class="submit-area col-lg-12 col-12">
                                                <button type="submit" class="theme-btn submit-btn">Send request</button>
                                                <div id="loader">
                                                    <i class="ti-reload"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you</div>
                                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- volunteer-area-end -->
    </div>
    <!-- end of page-wrapper -->


    @endsection
