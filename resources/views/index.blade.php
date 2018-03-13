@extends('layouts.app')

@section('content')
    <header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                <!--begin navbar -->
                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!--logo -->
                    <a href="index.html" class="navbar-brand" id="logo">
                        <h1>
                            <i class="material-icons" style="vertical-align: middle">wb_sunny</i>
                            Elios
                        </h1>
                    </a>

                </div>

                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home_wrapper">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!--end navbar -->

            </div>
            <!--end container -->

        </nav>
        <!--end nav -->

    </header>
    <!--end header -->

    <!--begin hero section-->
    <section class="luna-homewrapper" id="home_wrapper">

        <div class="luna-homewrapper-overlay"></div>

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings text-center">

                        <h1>Elios Mirror</h1>

                        <h2>Un miroir à votre image</h2>

                    </div>

                </div>
                <!--end col md 12 -->

                <ul class="luna-hero-social">

                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                </ul>

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--begin hero section-->

    <!--begin section white-->
    <section class="section-white" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 6 -->
                <div class="col-md-6">

                    <div class="luna-headings-dark  wow fadeInLeft" data-wow-delay="0.60s"
                         style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">

                        <h2>About</h2>

                        <h3>Find Unique Features</h3>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit, sed quia magni
                            dolores eos qui ratione sequi nesciunt.</p>

                        <div class="luna-aboutbox">

                            <img src="images/icon1.png" alt="icon">

                            <div class="luna-aboutbox-text">

                                <h4>Quality Design</h4>

                                <p>Lorisum fugit, sed quia magni dolores eos qui rationsequi nesciunt. Neque et quis
                                    autem velis repreherit eos qui ratione sequi nesciunt.</p>

                            </div>

                        </div>

                        <div class="luna-aboutbox">

                            <img src="images/icon2.png" alt="icon">

                            <div class="luna-aboutbox-text">

                                <h4>Premium Security</h4>

                                <p>Lorisum fugit, sed quia magni dolores eos qui rationsequi nesciunt. Neque et quis
                                    autem velis repreherit eos qui ratione sequi nesciunt.</p>

                            </div>

                        </div>

                        <div class="luna-aboutbox">

                            <img src="images/icon4.png" alt="icon">

                            <div class="luna-aboutbox-text">

                                <h4>Fully Customizable</h4>

                                <p>Lorisum fugit, sed quia magni dolores eos qui rationsequi nesciunt. Neque et quis
                                    autem velis repreherit eos qui ratione sequi nesciunt.</p>

                            </div>

                        </div>

                    </div>

                </div>
                <!--end col md 6 -->

                <!--begin col md 6 -->
                <div class="col-md-6 text-center luna-imagewrap1  wow fadeInRight" data-wow-delay="0.60s"
                     style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">

                    <img src="images/luna-about2.png" alt="about-image" class="width-100">

                </div>
                <!--end col md 6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section white -->

    <!--begin section dark-->
    <section class="section-dark-xl" id="features">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12 text-center">

                    <div class="luna-headings-light">

                        <h2>Features</h2>

                        <h3>App Main Features</h3>

                    </div>

                </div>
                <!--end col md 12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-featbox text-center wow fadeInRight" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">

                        <i class="fa fa-apple gradient"></i>
                        <i class="fa fa-android gradient"></i>
                        <h3>Compatibility</h3>
                        <p>iOS, Android sed quia magni dolores eos qui ratione ipsam voluptatem quia voluptas sit
                            asperna netsum lorisum eos qui ratione sequi nesciunt.</p>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-featbox text-center wow fadeInRight" data-wow-delay="0.50s"
                         style="visibility: visible; animation-delay: 0.50s; animation-name: fadeInRight;">

                        <i class="fa fa-battery-3 gradient"></i>
                        <h3>Battery Saver</h3>
                        <p>Lorisum fugit, sed quia magni dolores eos qui rationsequi nesciunt. Neque et quis autem velis
                            repreherit eos qui ratione sequi nesciunt.</p>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-featbox text-center wow fadeInRight" data-wow-delay="0.75s"
                         style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInRight;">

                        <i class="fa fa-wifi gradient"></i>
                        <h3>Conectivity</h3>
                        <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem
                            velis reprehenit eos qui ratione sequi nesciunt.</p>

                    </div>

                </div>
                <!--end col md 4 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-featbox text-center wow fadeInRight" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">

                        <i class="fa fa-bell-o gradient"></i>
                        <h3>Notifications</h3>
                        <p>iOS, Android sed quia magni dolores eos qui ratione ipsam voluptatem quia voluptas sit
                            asperna netsum lorisum eos qui ratione sequi nesciunt.</p>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-featbox text-center wow fadeInRight" data-wow-delay="0.50s"
                         style="visibility: visible; animation-delay: 0.50s; animation-name: fadeInRight;">

                        <i class="fa fa-rocket gradient"></i>
                        <h3>Launch Speed</h3>
                        <p>Lorisum fugit, sed quia magni dolores eos qui rationsequi nesciunt. Neque et quis autem velis
                            repreherit eos qui ratione sequi nesciunt.</p>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-featbox text-center wow fadeInRight" data-wow-delay="0.75s"
                         style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInRight;">

                        <i class="fa fa-rss gradient"></i>
                        <h3>Sensors</h3>
                        <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem
                            velis reprehenit eos qui ratione sequi nesciunt.</p>

                    </div>

                </div>
                <!--end col md 4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--section section dark -->

    <!--section section white-->
    <section class="section-white">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row text-center">

                <!--begin col md 12 -->
                <div class="col-md-12 text center">

                    <div class="luna-headings-dark">

                        <img src="images/luna-about3.png" alt="about-image" class="luna-about-image wow fadeInUp"
                             data-wow-delay="0.75s"
                             style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">

                        <h2>Download</h2>

                        <h3>Get Yourself Luna App</h3>

                        <div class="luna-download margin-top-40">

                            <a href="#"><img src="images/google-badge.png" alt="google"></a>

                            <a href="#"><img src="images/apple-badge.png" alt="apple"></a>

                            <a href="#"><img src="images/windows-badge.png" alt="windows"></a>

                        </div>

                    </div>

                </div>
                <!--end col md 12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section white -->

    <!--begin section-image-->
    <section class="section-image">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 4 -->
                <div class="col-md-4">

                </div>
                <!--end col md 4 -->

                <!--begin col md 8 -->
                <div class="col-md-8 padding-left-60">

                    <div class="luna-headings-light text-center">

                        <h2 class="white-text">Process</h2>

                        <h3 class="white-text">How it works?</h3>

                        <div class="tabs margin-top-40">

                            <nav class="tabs-nav">

                                <ul>
                                    <li data-tab="1" class="tab-item-luna"><h4>1. Choose plan</h4></li>
                                    <li data-tab="2" class="tab-item-luna"><h4>2. Download</h4></li>
                                    <li data-tab="3" class="tab-item-luna"><h4>3. Customize</h4></li>
                                    <li data-tab="4" class="tab-item-luna"><h4>4. Enjoy</h4></li>
                                </ul>

                            </nav>

                            <div class="tab-container">

                                <div class="tab-content" data-tab="1">

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                        Nemo enim ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <ul>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                    </ul>

                                    <a href="#"><i class="fa fa-long-arrow-right">
                                        </i> Payment plans and details</a>

                                </div>

                                <div class="tab-content" data-tab="2">

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                        Nemo enim ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <ul>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                    </ul>

                                    <a href="#"><i class="fa fa-download">
                                        </i> Download app</a>

                                </div>

                                <div class="tab-content" data-tab="3">


                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                        Nemo enim ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <ul>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                    </ul>

                                    <a href="#"><i class="fa fa-cog">
                                        </i> View Tutorial</a>


                                </div>

                                <div class="tab-content" data-tab="4">

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labo et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <ul>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                        <li><i class="fa fa-check"></i>Consectetur adipisci, sed do eiusmod tempor
                                            incido.
                                        </li>
                                        <li><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                            asperna.
                                        </li>
                                    </ul>

                                    <a href="#"><i class="fa fa-star">
                                        </i> Rate Us</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!--end col md 8 -->

            </div>
            <!--end row -->
        </div>
        <!--end container -->

    </section>
    <!--end section image -->

    <!--begin section-white-->
    <section class="section-white" id="gallery">

        <!--begin container -->
        <div class="container-fluid">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-dark-center text-center">

                        <h2>Gallery</h2>

                        <h3>Luna in screenshots</h3>

                    </div>

                </div>
                <!--end col md 12 -->

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <!--begin owl carousel -->
                    <div id="owl-one" class="owl-carousel owl-theme">

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                        <div>
                            <!--begin popup-gallery-->
                            <div class="popup-gallery">
                                <a class="popup2" href="http://placehold.it/300x522">
                                    <img src="http://placehold.it/300x522" alt="gallery-image">
                                    <span class="eye-wrapper">
		                            	<i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i>
		                            </span>
                                </a>
                            </div>
                            <!--end popup-gallery-->
                        </div>

                    </div>
                    <!--end owl carousel -->

                </div>
                <!--end col md 12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section white -->

    <!--begin section-grey-->
    <section class="section-grey">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-dark-center text-center">

                        <h2>features</h2>

                        <h3>More special features</h3>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit, sed quia<br> magni
                            dolores eos qui ratione sequi nesciunt. Neque et quis autem.</p>

                    </div>

                </div>
                <!--end col md 12 -->

                <!--begin col md 4 -->
                <div class="col-md-4 padding-top-40">

                    <div class="luna-featbox2 wow fadeInLeft" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox2-icon">
                                <i class="fa fa-diamond"></i>
                            </div>
                        </div>

                        <div class="luna-featbox2-text">

                            <h3>Modern Design</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                    <div class="luna-featbox2 wow fadeInLeft" data-wow-delay="0.45s"
                         style="visibility: visible; animation-delay: 0.45s; animation-name: fadeInLeft;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox2-icon">
                                <i class="fa fa-gear"></i>
                            </div>
                        </div>

                        <div class="luna-featbox2-text">

                            <h3>Prefences</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                    <div class="luna-featbox2  wow fadeInLeft" data-wow-delay="0.65"
                         style="visibility: visible; animation-delay: 0.65s; animation-name: fadeInLeft;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox2-icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>

                        <div class="luna-featbox2-text">

                            <h3>User Friendly</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                    <div class="luna-featbox2 wow fadeInLeft" data-wow-delay="0.85s"
                         style="visibility: visible; animation-delay: 0.85s; animation-name: fadeInLeft;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox2-icon">
                                <i class="fa fa-bell"></i>
                            </div>
                        </div>

                        <div class="luna-featbox2-text">

                            <h3>Notifications</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4">

                    <div class="luna-imagewrap2 text-center">

                        <img src="images/luna-about4.png" alt="about-image" class="width-100 wow fadeInUp"
                             data-wow-delay="0.85s"
                             style="visibility: visible; animation-delay: 0.85s; animation-name: fadeInUp;">

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4">

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Accesability</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.45s"
                         style="visibility: visible; animation-delay: 0.45s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-leaf"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Battery Saver</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.65s"
                         style="visibility: visible; animation-delay: 0.65s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-comments-o"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Chat</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.85s"
                         style="visibility: visible; animation-delay: 0.85s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Great UX</h3>

                            <p>Lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt et qui.Lorisum
                                fugit, sed quia dolor.</p>

                        </div>

                    </div>

                </div>
                <!--end col md 4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section grey-->

    <!--begin section-image-->
    <section class="section-image2">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 10 -->
                <div class="col-md-10 col-md-offset-1">

                    <!--begin owl carousel -->
                    <div id="owl-two" class="owl-carousel owl-theme owl-two">

                        <div class="luna-reviewbox text-center">

                            <div class="luna-reviewbox-img"><img src="http://placehold.it/200x200" alt="luna-image">
                            </div>
                            <h4>John Doe - <span class="">  Company Name</span></h4>


                            <p>"Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labo
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Nemo enim
                                ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit.Nemo enim ipsam
                                voluptatem quia voluptas sit asperna netsum lorisum fugit, sed quiamagni dolores eos qui
                                ratione."</p>

                        </div>

                        <div class="luna-reviewbox text-center">

                            <div class="luna-reviewbox-img"><img src="http://placehold.it/200x200" alt="luna-image">
                            </div>
                            <h4>Sam Smith - <span class="">  Company Name</span></h4>


                            <p>"Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labo
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Nemo enim
                                ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit.Nemo enim ipsam
                                voluptatem quia voluptas sit asperna netsum lorisum fugit, sed quiamagni dolores eos qui
                                ratione."</p>

                        </div>

                        <div class="luna-reviewbox text-center">

                            <div class="luna-reviewbox-img"><img src="http://placehold.it/200x200" alt="luna-image">
                            </div>
                            <h4>Sarah Miller - <span class="">  Company Name</span></h4>


                            <p>"Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labo
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Nemo enim
                                ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit.Nemo enim ipsam
                                voluptatem quia voluptas sit asperna netsum lorisum fugit, sed quiamagni dolores eos qui
                                ratione."</p>

                        </div>

                    </div>
                    <!--end owl carousel -->

                </div>
                <!--end col md 10-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section white -->

    <!--begin section-white-->
    <section class="section-white" id="pricing">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-dark-center text-center">

                        <h2>Pricing</h2>

                        <h3>Choose your favorite plan</h3>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit asperna netsum lorisum fugit, sed quia<br> magni
                            dolores eos qui ratione sequi nesciunt. Neque et quis autem.</p>

                    </div>

                </div>
                <!--end col md 12 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-pricebox wow fadeInRight" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">

                        <div class="price-top">

                            <h4>free</h4>

                            <p class="price">

                                <span class="currency">$</span>
                                <span class="number">0,00</span>
                                <span class="period">First Month</span>
                            </p>

                        </div>

                        <div class="price-bottom">

                            <ul>
                                <li><i class="fa fa-check"></i>Daily Notifications</li>
                                <li><i class="fa fa-check"></i>Analytics Charts</li>
                                <li><i class="fa fa-check"></i>Personal Settings</li>
                                <li><i class="fa fa-close"></i>Premium Features</li>
                                <li><i class="fa fa-close"></i>More that 1 profile to create</li>
                                <li class="last"><i class="fa fa-close"></i>Acces to Online Community</li>
                            </ul>

                            <a href="#" class="btn-price">Get Started</a>

                        </div>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-pricebox wow fadeInRight" data-wow-delay="0.50s"
                         style="visibility: visible; animation-delay: 0.50s; animation-name: fadeInRight;">

                        <div class="price-top">

                            <h4>Basic</h4>

                            <p class="price">

                                <span class="currency">$</span>
                                <span class="number">5,99</span>
                                <span class="period">Monthly</span>
                            </p>

                        </div>

                        <div class="price-bottom">

                            <ul>
                                <li><i class="fa fa-check"></i>Daily Notifications</li>
                                <li><i class="fa fa-check"></i>Analytics Charts</li>
                                <li><i class="fa fa-check"></i>Personal Settings</li>
                                <li><i class="fa fa-check"></i>Premium Features</li>
                                <li><i class="fa fa-check"></i>More that 1 profile to create</li>
                                <li class="last"><i class="fa fa-close"></i>Acces to Online Community</li>
                            </ul>

                            <a href="#" class="btn-price">Get Started</a>

                        </div>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4  wow fadeInRight" data-wow-delay="0.75s"
                     style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInRight;">

                    <div class="luna-pricebox">

                        <div class="price-top">

                            <h4>Premium</h4>

                            <p class="price">

                                <span class="currency">$</span>
                                <span class="number">20,99</span>
                                <span class="period">Per Year</span>
                            </p>

                        </div>

                        <div class="price-bottom">

                            <ul>
                                <li><i class="fa fa-check"></i>Daily Notifications</li>
                                <li><i class="fa fa-check"></i>Analytics Charts</li>
                                <li><i class="fa fa-check"></i>Personal Settings</li>
                                <li><i class="fa fa-check"></i>Premium Features</li>
                                <li><i class="fa fa-check"></i>More that 1 profile to create</li>
                                <li class="last"><i class="fa fa-check"></i>Acces to Online Community</li>
                            </ul>

                            <a href="#" class="btn-price">Get Started</a>

                        </div>

                    </div>


                </div>
                <!--end col md 4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section white -->

    <!--begin section-contact-->
    <section class="section-dark" id="contact">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-light text-center">

                        <h2>Contact</h2>

                        <h3>Let's get in touch</h3>

                    </div>

                    <!--begin success message -->
                    <p class="contact_success_box" style="display:none;">We received your message and you'll hear from
                        us soon. Thank You!</p>
                    <!--end success message -->

                    <!--begin contact form -->
                    <form id="contact-form" class="luna-contact text-center" action="php/contact.php" method="post">

                        <input class="luna-contact-input" required="" name="contact_names" placeholder="Full Name"
                               type="text">
                        <input class="luna-contact-input" required="" name="contact_email" placeholder="Email Adress"
                               type="email">
                        <textarea class="luna-contact-comment" rows="2" cols="20" name="contact_message"
                                  placeholder="Message for us"></textarea>

                        <div class="luna-contact-wrapper">

                            <input value="Submit" id="submit-button" class="luna-contact-submit" type="submit">

                        </div>

                    </form>
                    <!--end contact form -->

                </div>
                <!--end col md 10 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section contact-->

    <!--begin footer -->
    <footer class="luna-footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 4 -->
                <div class="col-md-4 col-xs-12">

                    <div class="luna-footerbox">

                        <i class="fa fa-phone"></i>

                        <p>Call Us</p>

                        <span>+00 12345 698</span>

                    </div>

                </div>
                <!--end col md 4-->

                <!--begin col md 4 -->
                <div class="col-md-4 col-xs-12">

                    <div class="luna-footerbox">

                        <i class="fa fa-envelope-o"></i>

                        <p>Contact Us</p>

                        <span>contact@email.com</span>

                    </div>

                </div>
                <!--end col md 4-->

                <!--begin col md 4 -->
                <div class="col-md-4 col-xs-12">

                    <div class="luna-footerbox">

                        <i class="fa fa-map-marker"></i>

                        <p>Visit Us</p>

                        <span>Miami 23894, US</span>

                    </div>

                </div>
                <!--end col md 4-->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <p class="luna-copyright">
                        <span>Copyright © 2017 Luna. Designed and Developed by</span>
                        <a href="https://themeforest.net/user/epic-themes/portfolio" target="blank" class="author">Epic
                            Themes</a>
                    </p>

                </div>
                <!--end col md 12-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </footer>
    <!--end footer -->


    <!-- Load JS here for greater good =============================-->
@endsection