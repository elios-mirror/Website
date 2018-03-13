<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Loading Bootstrap -->
    <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("css/styke-magnific-popup.css") }}" rel="stylesheet">

    <!-- Loading Owl Carousel -->
    <link rel="stylesheet" href="{{ asset("owlcarousel/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("owlcarousel/owl.theme.default.min.css") }}">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset("css/elios.css") }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
@yield('content')
<!-- Scripts -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $('#owl-one').owlCarousel({
        center: true,
        autoplay: true,
        smartSpeed: 500,
        loop: true,
        margin: 25,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
            },
            1000: {
                items: 5,
                nav: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
                loop: true
            }
        }
    })


    $('#owl-two').owlCarousel({
        center: true,
        autoplay: true,
        smartSpeed: 500,
        loop: true,
        margin: 25,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false,
                navText: ["<i class='fa fa-quote-left'></i>", "<i class='fa fa-quote-right'></i>"]
            },
            1000: {
                items: 1,
                nav: false,
                navText: ["<i class='fa fa-quote-left'></i>", "<i class='fa fa-quote-right'></i>"],
                loop: true
            }
        }
    })
</script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/wow.js"></script>
<script src="js/countdown.js"></script>
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>
</body>
</html>
