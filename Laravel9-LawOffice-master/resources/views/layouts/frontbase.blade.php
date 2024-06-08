<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.css">
        <!-- Icofont CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/icofont.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon.css">
        <!-- Wow CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/odometer.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

        <title>@yield("title")</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="Emirhan KESKİN">
        <link rel="icon" type="image/x-icon" href="@yield('icon')">


        @yield("head")

    </head>
    <body>
        @include("home.header")


        
        @yield('content')
        
        @include("home.footer")
        @include("home.login")

    </body>
</html>