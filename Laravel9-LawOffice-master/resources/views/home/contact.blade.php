@extends('layouts.frontbase')

@section('title', 'Contact | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
<!-- Preloader -->
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->


<!-- Page Title -->
<div class="page-title-area page-title-area-two" style="background-color:black;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="page-title-text">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <i class="icofont-simple-right"></i>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Contact Form -->
<div class="contact-form contact-form-four pb-100">
    <!-- Location -->
    <div class="loaction-area">
        <div class="container">
            <div class="row location-bg" >
                <div class="col-sm-6 col-lg-4">
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <h3>Location</h3>
                        <ul>
                            <li>Karabuk University - Computer Engineering</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <h3>Phone</h3>
                        <ul>
                            <li>
                                <a>+0542 515 68 44</a>
                            </li>
                            <li>
                                <a>+0554 487 96 56</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <h3>Email</h3>
                        <ul>
                            <li>
                                <a>emrhankeskn@gmail.com</a>
                            </li>
                            <li>
                                <a>keskinnemir16@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Location -->

    <section class="faq-area pb-0" >
        <div class="container">
            <div class="row faq-wrap">
                <div class="col-lg-12">
                    <div class="faq-item">
                        <ul class="accordion">
                            <li class="wow fadeInUp" data-wow-delay=".3s">
                                <a>Our Contact Information</a>
                                <p>{!! $setting->contact !!}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

            <!--contact-->
    <div class="container-fluid">
        <div align='center' id="msgSubmit" class="h3 text-center hidden"><!--@include('home.messages')--><h1 style="color: #b69d74;" >{{Session::get('info')}}</h1></div>
        <br>
        <form id="checkout-form" action="{{route("storemessage")}}" method="post">
            @csrf
            <div class="row contact-wrap">
                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Full Name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message Description"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="text-center">
                        <button type="submit" class="contact-btn">Send Message</button>
                    </div>
                    <div align='center' id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact Form -->



<!-- Start Map Area -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d750.3773810843119!2d32.65495472925343!3d41.210665607607815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk%20University!5e0!3m2!1sen!2sbd!4v1652966464454!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->


@endsection