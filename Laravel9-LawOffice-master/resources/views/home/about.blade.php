@extends('layouts.frontbase')

@section('title', 'About Us | ' . $setting->title)
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
    <div class="page-title-area page-title-area-three" style="background-color:black;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="page-title-text">
                    <h2>About Our Firm and History</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About -->
    <div class="about-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-video-wrap">
                            <div class="about-video">
                                <img src="{{ asset('assets') }}/img/lobby.png" style="width: 696px,512px" alt="About">
                            </div>
                            <a href="https://www.youtube.com/watch?v=X9yuZSwkKSY" class="popup-youtube">
                                <i class="icofont-ui-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-information">
                            <h2><span>Since 1962 </span> , About US</h2>
                            <p>{!! $setting->aboutus !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
@endsection
