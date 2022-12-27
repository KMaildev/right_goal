<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>Right Goal Co.,Ltd</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.menu')

        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        @yield('content')

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/carousel-thumbs.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>


    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @yield('script')
</body>

</html>
