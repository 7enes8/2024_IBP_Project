@extends('layouts.frontbase')

@section('title', 'Appointment')

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

        <!-- Navbar -->
        <div class="navbar-area fixed-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </div>
        </div>
        <!-- End Navbar -->

        <!-- Page Title -->
        <div class="page-title-area" style="background-color:black;">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-text">
                        <h2>Appointment</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

   <div class="container-fluid">
        <div id="getAppointment" class="h3 text-center">
            <!--@include('home.messages')-->
            <h1 style="color: #b69d74;" >{{Session::get('info')}}</h1>
        </div>
        <br>
        <form id="checkout-form" action="{{route('storeappointment')}}" method="post">
            @csrf
            <div class="row contact-wrap">
                
                
                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="date" name="date" id="date" class="form-control text-dark" required data-error="Please enter appointment date" placeholder="Appointment Date">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="time" name="time" id="time" class="form-control text-dark" required data-error="Please enter appointment time" placeholder="Appointment Time">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 mb-5">
                    <div class="form-group">
                    <select  name = "lawyer_id" class="form-control wide bg-dark" aria-label=".form-control-lg example">
                        <option selected>Open this select menu</option>
                        @foreach ($lawyers as $lawyer)
                            <option value="{{$lawyer->id}}">{{$lawyer->name}}</option>
                        @endforeach
                    </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 mb-5">
                    <div class="form-group">
                    <select  name = 'services' class="form-control wide bg-dark" aria-label=".form-control-lg example">
                        <option selected>Open this select menu</option>
                        @foreach ($services as $rs)
                            <option value='{{$rs->id}}'>{{$rs->title}}</option>
                        @endforeach
                    </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>


            
                <div class="col-md-12 col-lg-12">
                    <div class="text-center">
                        <button type="submit" class="contact-btn">Get Appointment</button>
                    </div>
                    <div id="getAppointment" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
@endsection
