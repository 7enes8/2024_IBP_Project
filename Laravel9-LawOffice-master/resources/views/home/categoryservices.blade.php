@extends('layouts.frontbase')

@section('title', 'Services->' . $category->title)

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
        <div class="page-title-area title-img-one">
            <div class="d-table">
                <div class="d-table-cell" style="background-color:black;">
                    <div class="page-title-text">
                        <h2>{{ $category->title }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>{{ $category->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- portfolio -->
        <section class="portfolio-area portfolio-area-two pt-100">
            <div class="container">
                <div class="section-title">
                    <h2>Check Out Our Popular Case Studies.</h2>
                </div>
                <div class="row">
                    @foreach ($services as $rs)
                        <div class="col-sm-6 col-lg-4">
                            <div class="portfolio-item wow fadeInUp" data-wow-delay=".3s">
                                <a href="{{ route('services', ['id' => $rs->id]) }}"><img
                                        src="{{ Storage::url($rs->image) }}" alt="Blog" style="width: 365px,399px"></a>
                                <div class="portfolio-inner">
                                    <span>{{ $rs->title }}</span>
                                    <h3>
                                        <a href="{{ route('services', ['id' => $rs->id]) }}">{{ $rs->keywords }}</a>
                                    </h3>
                                    <p>{{ $rs->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="case-pagination">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icofont-simple-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-simple-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End portfolio -->


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
