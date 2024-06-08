@extends('layouts.frontbase')

@section('title', 'References | ' . $setting->title)
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
                    <h2>Our References</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                        </li>
                        <li>References</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="help-area help-area-two help-area-four pb-70">
        <div class="container-fluid">
            <div class="row align-items-center about-area">
                <div class="col-lg-12" align="center">
                        <p>{!!$setting->references!!}</p>
                </div>
            <div class="help-shape">
                <img src="assets/img/home-one/6.png" alt="Shape">
            </div>
        </div>
    </div>
    </div>
@endsection
