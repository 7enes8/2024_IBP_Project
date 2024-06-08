@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions | ' . $setting->title)
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
    <div class="page-title-area" style="background-color:black;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="page-title-text">
                    <h2>Frequently Asked Questions</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                        </li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Faq -->
    <section class="faq-area pt-100">
        <div class="container">
            <div class="row faq-wrap">
                <div class="col-lg-12">
                    <div class="faq-head">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="faq-item">
                        <ul class="accordion">
                            @foreach ($datalist as $rs)
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <a>{{ $rs->question }}</a>
                                    <p>{!! $rs->answer !!}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq -->

    <div class="help-area help-area-two help-area-four pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--video-->
                <div class="about-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-item">
                                    <div class="about-video-wrap">
                                        <div class="about-video">
                                            <img src="{{ asset('assets') }}/img/jenn.png" alt="About">
                                        </div>
                                        <a href="https://www.youtube.com/watch?v=dqG0qR4gTSc" class="popup-youtube">
                                            <i class="icofont-ui-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item">
                                    <div class="about-information">
                                        <h2><span>Frequently Asked Questions</span></h2>
                                        <p>We are focused on trying cases for our clients whenever that is necessary. Having
                                            your day in court allows you to put the facts of your case in front of your
                                            peers and allows them to make a decision based on the facts in the case.</p>
                                            <br>
                                        <p>It is preferable for you to come to our office so that you can become acquainted 
                                            with the staff who will be working diligently on your case. However, when it is not possible 
                                            for you to come to our office, we can schedule a date and time to meet with you at a location that 
                                            is more convenient for you. In addition, we can facilitate business electronically to save you time 
                                            and money.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--endvideo-->
            </div>
            <div class="help-shape">
                <img src="assets/img/home-one/6.png" alt="Shape">
            </div>
        </div>
    </div>
@endsection
