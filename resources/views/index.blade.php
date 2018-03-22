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
                            <img src="/images/elios.png" alt="logo">
                            Elios
                        </h1>
                    </a>

                </div>

                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home_wrapper">Accueil</a></li>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#features">Fonctionnalités</a></li>
                        {{--<li><a href="#gallery">Gallerie</a></li>--}}
                        <li><a href="#pricing">Offres</a></li>
                        {{--<li><a href="#contact">Contact</a></li>--}}
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

                {{--<ul class="luna-hero-social">

                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                </ul>--}}

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

                        <h3>à propos</h3>

                        <p>Elios Mirror est un miroir connecté vous facilitant la vie au quotidien. Il propose une
                            infinité de fonctionnalités.</p>

                        <div class="luna-aboutbox">

                            <img src="images/icon1.png" alt="icon">

                            <div class="luna-aboutbox-text">

                                <h4>Sobre et Design</h4>

                                <p>Elios Mirror est un mirroir pensé pour s'intégrer parfaitement dans votre
                                    habitation. Par son verre sans tain de qualité et son cadre, il ne passera pas
                                    innaperçu.</p>

                            </div>

                        </div>

                        <div class="luna-aboutbox">

                            <img src="images/icon4.png" alt="icon">

                            <div class="luna-aboutbox-text">

                                <h4>Entièrement personnalisable</h4>

                                <p>Modifiez et re-modifiez votre miroir à votre gout. Une interface simple vous
                                    permettra de personnaliser entièrement votre miroir pour qu'il soit unique et selon
                                    vos gouts.</p>

                            </div>

                        </div>

                        <div class="luna-aboutbox">

                            <img src="images/icon2.png" alt="icon">

                            <div class="luna-aboutbox-text">

                                <h4>Sécurisé</h4>

                                <p>Elios Mirror est étanche, il pourra donc parfaitement s'intégrer dans votre salle
                                    de bain. Il est également sécurisé informatiquement, toutes les données qui
                                    transites sont chiffrés.</p>

                            </div>

                        </div>

                    </div>

                </div>
                <!--end col md 6 -->

                <!--begin col md 6 -->
                <div class="col-md-6 text-center luna-imagewrap1  wow fadeInRight" data-wow-delay="0.60s"
                     style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">

                    <img src="images/mirror.png" alt="about-image" style="margin-top: 10rem">

                </div>
                <!--end col md 6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section white -->

    <!--begin section-grey-->
    <section class="section-grey" id="features">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-dark-center text-center">

                        <h3>Les fonctionnalités</h3>

                        <p>Elios Mirror intègre de nombreuses fonctionnalités vous permettant de l'intégrer parfaitement
                            dans votre quotidien.<br></p>

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

                            <h3>Design Moderne</h3>

                            <p>Avec son verre sans tain et un écran de haute qualité il ne passera pas innaperçu chez
                                vous.</p>

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

                            <h3>Personnalisable</h3>

                            <p>Une interface entièrement personnalisable selon vos gouts pour s'intégrer parfaitement
                                chez vous.</p>

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

                            <p>Une interface simple d'utilisation pour accèder à l'essentiel des informations.</p>

                        </div>

                    </div>

                    <div class="luna-featbox2 wow fadeInLeft" data-wow-delay="0.85s"
                         style="visibility: visible; animation-delay: 0.85s; animation-name: fadeInLeft;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox2-icon">
                                <i class="fa fa-cloud"></i>
                            </div>
                        </div>

                        <div class="luna-featbox2-text">

                            <h3>Cloud</h3>

                            <p>Un cloud sécurisé pour enregistrer toutes vos préférences, vos image, vidéos et bien plus
                                encore.</p>

                        </div>

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4">

                    <div class="luna-imagewrap2 text-center">

                        <img src="images/mirror.png" alt="about-image" class=" wow fadeInUp"
                             data-wow-delay="0.85s"
                             style="visibility: visible; animation-delay: 0.85s; animation-name: fadeInUp; margin-top: 10rem">

                    </div>

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 padding-top-40">

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-download"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Store d'applications</h3>

                            <p>Accédez à vos applications préféré depuis votre miroir. Installez en de nouvelles
                                permettant d'utiliser les fonctionnalités du miroir.</p>

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

                            <h3>Ecologique</h3>

                            <p>Elios mirror consomme très peu d'énergie, moins de 50 watt par heures.</p>

                        </div>

                    </div>

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.65s"
                         style="visibility: visible; animation-delay: 0.65s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-wifi"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Controlable à Distance</h3>

                            <p>Controllable sans toucher le miroir grace au leap motion mais aussi controllable depuis
                                votre téléphone et votre navigateur.</p>

                        </div>

                    </div>

                    <div class="luna-featbox3 wow fadeInRight" data-wow-delay="0.85s"
                         style="visibility: visible; animation-delay: 0.85s; animation-name: fadeInRight;">

                        <div class="luna-icon-wrap">

                            <div class="luna-featbox3-icon">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>

                        <div class="luna-featbox3-text">

                            <h3>Sécurisé</h3>

                            <p>Toutes vos données sont chiffrés localement mais également lorsqu'un tranfert s'effectue vers le cloud (AES-256).</p>

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

    <!--begin section-white-->
  {{--  <section class="section-white" id="gallery">

        <!--begin container -->
        <div class="container-fluid">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-dark-center text-center">

                        <h3>Gallerie</h3>

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

    </section>--}}
    <!--end section white -->
    <!--begin section-white-->
    <section class="section-white" id="pricing">

        <!--begin container -->
        <div class="container" style="width: 1400px">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-dark-center text-center">

                        <h3>Nos offres</h3>

                        <p>Elios vous propose différentes offres pour s'adapter au mieux à vos besoins.</p>

                    </div>

                </div>
                <!--end col md 12 -->

                <!--begin col md 4 -->
                <div class="col-md-2 col-sm-2">

                </div>
                <!--end col md 4 -->

                <!--begin col md 4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="luna-pricebox wow fadeInRight" data-wow-delay="0.50s"
                         style="visibility: visible; animation-delay: 0.50s; animation-name: fadeInRight;">

                        <div class="price-top">

                            <h4>Normal</h4>

                            <p class="price">

                                <span class="currency">€</span>
                                <span class="number">499,90</span>
                                <span class="period">65x35cm</span>
                            </p>

                        </div>

                        <div class="price-bottom">

                            <ul>
                                <li><i class="fa fa-check"></i>Interface personnalisable</li>
                                <li><i class="fa fa-check"></i>Store d'applications</li>
                                <li><i class="fa fa-check"></i>Modules personnalisés</li>
                                <li><i class="fa fa-check"></i>Verre sans tain haute qualité</li>
                                <li><i class="fa fa-check"></i>Controle téléphone & interface web</li>
                                <li><i class="fa fa-check"></i>Controle vocal</li>
                                <li><i class="fa fa-close"></i>Controle à distance sans toucher le miroir</li>
                            </ul>

                            <!-- <a href="#" class="btn-price">Get Started</a> -->

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

                                <span class="currency">€</span>
                                <span class="number">799,90</span>
                                <span class="period">65x35cm</span>
                            </p>

                        </div>

                        <div class="price-bottom">

                            <ul>
                                <li><i class="fa fa-check"></i>Interface personnalisable</li>
                                <li><i class="fa fa-check"></i>Store d'applications</li>
                                <li><i class="fa fa-check"></i>Modules personnalisés</li>
                                <li><i class="fa fa-check"></i>Verre sans tain haute qualité</li>
                                <li><i class="fa fa-check"></i>Controle téléphone & interface web</li>
                                <li><i class="fa fa-check"></i>Controle vocal</li>
                                <li><i class="fa fa-check"></i>Controle à distance sans toucher le miroir</li>
                            </ul>

                            <!-- <a href="#" class="btn-price">Get Started</a> -->

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
   {{-- <section class="section-dark" id="contact">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12">

                    <div class="luna-headings-light text-center">

                        <h3>Nous contacter</h3>

                    </div>
                    <!--end success message -->

                    <!--begin contact form -->
                    <form id="contact-form" class="luna-contact text-center" action="" method="post">

                        <input class="luna-contact-input" required="" name="contact_names" placeholder="Nom et Prénom"
                               type="text">
                        <input class="luna-contact-input" required="" name="contact_email" placeholder="Adresse email"
                               type="email">
                        <textarea class="luna-contact-comment" rows="2" cols="20" name="contact_message"
                                  placeholder="Votre message" style="resize: vertical"></textarea>

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

    </section>--}}
    <!--end section contact-->

    <!--begin footer -->
    <footer class="luna-footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col md 4 -->
                <!--end col md 4-->

                <!--begin col md 4 -->
                <div class="col-md-6 col-xs-12">

                    <div class="luna-footerbox">

                        <i class="fa fa-envelope-o"></i>

                        <p>Nous contacter</p>

                        <span>contact@elios.com</span>

                    </div>

                </div>
                <!--end col md 4-->

                <!--begin col md 4 -->
                <div class="col-md-6 col-xs-12">

                    <div class="luna-footerbox">

                        <i class="fa fa-map-marker"></i>

                        <p>Où sommes nous ?</p>

                        <span>Nice, 06000, France</span>

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
                        <span>Copyright © {{ date("Y") }} Elios</span>
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