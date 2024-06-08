@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@include('home.slider')

@section('content')

    <!-- Practice -->
    <section class="practice-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>HOW CAN WE HELP YOU</span>
                <h2>Our Legal Practices Areas</h2>
            </div>
            <div class="row">
                @foreach ($serviceslist1 as $rs)
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-law"></i>
                        </div>
                        <h3>{{ $rs->category->title }}</h3>
                        <p>{{ $rs->category->keywords }}</p>
                        <a href="{{ route('services', ['id' => $rs->id]) }}">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('assets') }}/img/home-one/7.png" alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('assets') }}/img/home-one/8.png" alt="Shape">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Practice -->

    <!-- Services -->
    <section class="pt-100">
        <div class="container">
            <div class="section-title">
                <span>Services</span>
                <h2>Our Latest Services</h2>
            </div>
            <div class="blog-slider owl-theme owl-carousel">

                @foreach ($serviceslist1 as $rs)
                    <div class="blog-item">
                        <a href="{{ route('services', ['id' => $rs->id]) }}">
                            <img src="{{ Storage::url($rs->image) }}" alt="Blog">
                        </a>
                        <div class="blog-inner">
                            <span>{{ $rs->category->title }}</span>
                            <div class="row">
                                <div align="right">
                                    @php
                                        $average = $rs->comment->average('rate');
                                    @endphp

                                    <h6>Rate : {{ number_format($average, 1) }}</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h3>
                                        <a href="{{ route('services', ['id' => $rs->id]) }}">{{ $rs->keywords }}</a>
                                    </h3>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    {{ $rs->created_at }}
                                </li>
                                <li>
                                    <i class="icofont-user-alt-7"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>
                            <p>{!! $rs->description !!}</p>
                            <a class="blog-link" href="{{ route('services', ['id' => $rs->id]) }}">
                                Read More
                                <i class="icofont-simple-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
        </div>
    </section>
    <!-- End Services -->

    <!-- Team -->
    <!-- <section class="team-area">
        <div class="container">
            <div class="section-title">
                <span>TEAM MEMBER</span>
                <h2>Meet Our Expert Attorneys</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{ asset('assets') }}/img/home-one/team/1.jpg" alt="Team">
                        <div class="team-inner">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>
                                <a href="attorney-details.html">Attor. Jerry Hudson</a>
                            </h3>
                            <span>Family Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{ asset('assets') }}/img/home-one/team/2.jpg" alt="Team">
                        <div class="team-inner">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>
                                <a href="attorney-details.html">Attor. Juho Hudson</a>
                            </h3>
                            <span>Criminal Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{ asset('assets') }}/img/home-one/team/3.jpg" alt="Team">
                        <div class="team-inner">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>
                                <a href="attorney-details.html">Attor. Sarah Se</a>
                            </h3>
                            <span>Divorce Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{ asset('assets') }}/img/home-one/team/4.jpg" alt="Team">
                        <div class="team-inner">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>
                                <a href="attorney-details.html">Attor. Aikin Ward</a>
                            </h3>
                            <span>Business Consultant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Team -->

@endsection
