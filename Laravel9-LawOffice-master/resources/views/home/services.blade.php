@extends('layouts.frontbase')

@section('title', $data->title)

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')

<style> .overflow {
    background-color: white;
    width: 526px;
    height: 480;
    overflow: auto;
  }</style>
    <body>

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

        <!-- Navbar -->
        <div class="navbar-area fixed-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets') }}/img/logo.png" alt="Logo">
                </a>
            </div>

        </div>
        </div>
        <!-- End Navbar -->

        <!-- Page Title -->
        <div class="page-title-area" style="background-color:black;">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-text">
                        <h2>{{ $data->title }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Service Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
        <div align='center' id="msgSubmit" class="h3 text-center hidden pt-100"><h1 style="color: #b69d74;" >{{Session::get('info')}}</h1></div>
        
        <!-- Blog Details -->
        <div class="blog-details-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="blog-details-item">
                            <div class="blog-details-img">
                                @foreach ($images as $rs)
                                    <img src="{{ Storage::url($rs->image) }}" alt="Blog Details"
                                        style="width: 630px, 595px">
                                @endforeach
                                <h2>{{ $data->title }}</h2>
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        {{ $data->created_at }}
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-7"></i>
                                        <a>Emirhan KESKİN</a>
                                    </li>
                                    <li>
                                        <i style="font-size:20px" class="fa">&#xf155;</i>
                                        <a>{{ $data->price}}</a>
                                    </li>
                                </ul>
                                <p style="color: black">{!! $data->detail !!}</p>
                            </div>
                            <div class="blog-details-social">
                                <ul>
                                    <li>
                                        <span>Follow US:</span>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/krbkuni/" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/karabukunv" target="_blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/school/karabuk-university/?originalSubdomain=tr" target="_blank">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
        
                            
                            <!--Comment-->
                            <div class="blog-details-contact">
                                <h2>Drop Your Comment</h2>
                                <div class="contact-form">
                                    <form action="{{route('storecomment')}}" method="POST">
                                        @csrf
                                        <input type="hidden" class="input" name="services_id" value="{{$data->id}}">
                                        <div class="contact-wrap">
                                            <div class="form-group">
                                                <input type="text" name="subject" id="name" class="form-control" required
                                                    placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="review" class="form-control" id="review" cols="30" rows="8" required
                                                    placeholder="Your Review"></textarea>
                                            </div>

                                            <div class="mt-3 mt-lg- mb-3">
                                                <label for="pxp-comments-rate" class="form-label" style="color: black">Rate ></label>
                                                <input type="radio" class="form-check-input" name="rate" value="1">
                                                <span class="ir" style="color: black">1</span>
                                                <input type="radio" class="form-check-input" name="rate" value="2">
                                                <span class="ir" style="color: black">2</span>
                                                <input type="radio" class="form-check-input" name="rate" value="3">
                                                <span class="ir" style="color: black">3</span>
                                                <input type="radio" class="form-check-input" name="rate" value="4">
                                                <span class="ir" style="color: black">4</span>
                                                <input type="radio" class="form-check-input" name="rate" value="5">
                                                <span class="ir" style="color: black">5</span>
                                            </div>
                                            @auth
                                            <div class="text-left">
                                                <button type="submit" class="contact-btn">Post A Comment</button>
                                            </div>
                                            @else
                                            <div class="text-left">
                                                <a href="/login" type="submit" class="contact-btn">Please Login</a>
                                            </div>
                                            @endauth
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--endComment-->

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="blog-details-item">
                 
                            <div class="blog-details-search">
     
                                <h3>Another Services</h3>
                                @foreach ($serviceslist1 as $rs)
                                    <ul>
                                        <li>
                                            <img src="{{ Storage::url($rs->image) }}" alt="Blog Details"
                                                width="100px, 90px">
                                            <div class="blog-details-recent">
                                                <h4>
                                                    <a
                                                        href="{{ route('services', ['id' => $rs->id]) }}">{{ $rs->category->title }}</a>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="icofont-user-alt-7"></i>
                                                        <a href="#">Admin</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-calendar"></i>
                                                        {{ $rs->created_at }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                            <!--review-->
                            <div class="blog-details-tags overflow">
                                <div class="row">
                                    <div class="col-sm-9">
                                <h3>Reviews ({{$data->comment->count('id')}})</h3>
                                    </div>
                                    @php
                                    $average = $data->comment->average('rate')
                                    @endphp
                                    <div class="col-sm-3" align='right'>
                                        <h6>Rate : {{number_format($average,1)}}</h6>
                                    </div>
                                </div>
                                <ul>
                                    <div>
                                        <div class="testimonial-item">
                                            @foreach($reviews as $rs)
                                            <div class="testimonial-wrap">
                                                <p style="font-size: 13px">{{$rs->review}}</p>
                                                
                                                <img src="assets/img/testimonial/1.jpg" alt="Testimonial">
                                                <div class="testimonial-right">
                                                    <h5>{{$rs->user->name}}</h5>
                                                    <h6>Rate : {{$rs->rate}}</h6>
                                                    <span style="font-size: 13px">{{$rs->subject}}</span>
                                                    <span style="font-size: 11px;color:black">{{$rs->created_at}}</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <!--review-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Details -->

        <!-- Services -->
    <section class="blog-area pt-100">
        <div class="container">
            <div class="section-title">
                <span>Services</span>
                <h2>Our Latest Services</h2>
            </div>
            <div class="blog-slider owl-theme owl-carousel">

                @foreach ($serviceslist1 as $rs)
                    <div class="blog-item">
                        <a href="{{ route('services', ['id' => $rs->id]) }}">
                            <img src="{{ Storage::url($rs->image) }}" alt="Blog" height="300px" width="auto">
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



        <!-- Essential JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Form Ajaxchimp JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    @endsection
