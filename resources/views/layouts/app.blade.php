<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InnovateTalk</title>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>

    <!-- Start Preloader -->
    <div id="loader">
        <div class="spinner">
            <div class="cube cube0"></div>
            <div class="cube cube1"></div>
            <div class="cube cube2"></div>
            <div class="cube cube3"></div>
            <div class="cube cube4"></div>
            <div class="cube cube5"></div>
            <div class="cube cube6"></div>
            <div class="cube cube7"></div>
            <div class="cube cube8"></div>
            <div class="cube cube9"></div>
            <div class="cube cube10"></div>
            <div class="cube cube11"></div>
            <div class="cube cube12"></div>
            <div class="cube cube13"></div>
            <div class="cube cube14"></div>
            <div class="cube cube15"></div>
        </div>
    </div>
    <!-- End Preloader -->


    <!-- Header includes logo and navagation links -->
    @include('layouts.partials.header')
    <!-- End of header tag -->

    @yield('content')


    <!-- Footer Section -->
    @include('layouts.partials.footer')
    <!-- Footer Section Ends -->


    <!-- Swiper JS CDN-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
