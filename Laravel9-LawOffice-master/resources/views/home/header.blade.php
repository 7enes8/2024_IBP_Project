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

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets') }}/img/logo.png" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">About</a>
                        </li>
                    
                        <!--deneme-->
                        <div>
                            @php
                                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                            @endphp

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    @foreach ($mainCategories as $rs)
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle active">{{ $rs->title }}</a>
                                            <ul class="dropdown-menu">
                                                @if (count($rs->children))
                                                    @include('home.categorytree', [
                                                        'children' => $rs->children,
                                                    ])
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach
                            </li>
                    </ul>
                </div>
                <!--denemeend-->
                <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                        </li>
                <li class="nav-item">
                    <a href="{{ route('references') }}" class="nav-link">References</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
                </ul>
                <div class="side-nav">
                    <a href="{{route('appointment')}}">Get Appointment</a>
                </div>
                <!----------------------------------------------->
                @auth
                    <ul class="navbar-nav">
                        <img class="img-xs rounded-circle " style="width: 50px"
                            src="{{ asset('assets') }}/admin/images/faces/face15.jpg" alt="">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('userpanel.index') }}" target="_blank" class="nav-link">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="modal" href="/logoutuser"> Logout </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endauth
                @guest
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">User</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" onclick="openLoginModal();"
                                        class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">
                                        Register </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endguest
        </div>
        </nav>
    </div>
</div>
</div>
<!-- End Navbar -->
