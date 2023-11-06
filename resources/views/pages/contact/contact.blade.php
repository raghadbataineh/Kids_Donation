@extends('layouts.master')

@section('title', 'Contact')
@section('contact')
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

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Contact Us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>Contact</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- start contact-pg-contact-section -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s3 section-title-s5">
                            <h2>Our Contacts</h2>
                        </div>
                        <div class="contact-details">
                            <p>If you want to join with us As a Volunteer. Contact Us Today!</p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Our Location</h5>
                                    <p>28 Street, Irbid ,Jordan</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Phone</h5>
                                    <p>0791757324</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>hopeharbor@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form-area">
                            <div class="section-title-s3 section-title-s5">
                                <h2>Quick Contact Form</h2>
                            </div>
                            <div class="contact-form">
                                @if (Session::has('message_sent'))
                                    <div class=" alert alert-success" role="alert">{{Session::get('message_sent')}}</div>
                                @endif
                                <form method="post" action="{{ route('contact.send') }}" class="contact-validation-active" id="contact-form" enctype="multipart/form-data">
                                    @csrf <!-- Add CSRF token for security -->
                                    <!-- Your form fields go here -->
                                    <div>
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control"  name="address" id="address" placeholder="Address">
                                    </div>
                                    <div class="comment-area">
                                        <textarea  name="notes"  id="note" placeholder="Case description*"></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">Submit Now</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53808.193111141176!2d35.8886093988767!3d32.55252313180369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c76916dac0453%3A0x5416e113d81f7d82!2z2KXYsdio2K8!5e0!3m2!1sar!2sjo!4v1694273927683!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->
    </div>
    <!-- end of page-wrapper -->

    @endsection
