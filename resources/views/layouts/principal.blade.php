<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gema - Software Solutions</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/imp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">

    <!-- Module css -->
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/header-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/banner-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/about-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/blog-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/fact-counter-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/breadcrumb-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/team-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/partner-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/testimonial-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/services-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer-section.css') }}">

    <link id="jssDefault" rel="stylesheet" href="{{ asset('assets/css/color/theme-color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    @livewireStyles
</head>


<body>

    <div class="boxed_wrapper ltr">

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <!-- <span data-text-preloader="i" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                N
                            </span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- page-direction -->
        {{-- <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->

        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><img src="/assets/images/icon/color-palette.png" alt="Color Palette"> </button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- end switcher menu -->
        @livewire('layouts.header-component')
        @yield('content')

        <div class="bottom-parallax">
            <!--Start footer area -->
            <footer class="footer-area">
                <!--Start Footer-->
                <div class="footer">
                    <div class="container">
                        <div class="row text-right-rtl">

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-footer-widget single-footer-widget--company-info marbtm50">
                                    <div class="our-company-info">
                                        <div class="text-box">
                                            <p>Trujillo, Perú</p>
                                        </div>
                                        <h2><a href="https://wa.me/+51968372292" target="_blank">+51 968 372 292</a>
                                        </h2>
                                        <h3><a href="mailto:yourmail@email.com">contacto@gemaswsolutions.com</a></h3>
                                        <div class="footer-social-link">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href="#"><i class="icon-facebook-circular-logo"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-footer-widget single-footer-widget--link-box marbtm50">
                                    <div class="title">
                                        <h3>Explorar</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                            <li><a
                                                    href="@if (!empty($servicios)) {{ route('portafolio', $servicios[0]['id']) }} @else # @endif ">Servicios</a>
                                            </li>
                                            <li><a href="{{ route('proyectos') }}">Portafolio de proyectos</a></li>
                                            <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                        </ul>
                                        <!--ul class="right">
                                            <li><a href="contact.html">Support</a></li>
                                            <li><a href="about.html">Terms of Use</a></li>
                                            <li><a href="about.html">Privacy Policy</a></li>
                                            <li><a href="contact.html">Help</a></li>
                                        </ul-->
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            @livewire('contacto.correo-component')
                            <!--End single footer widget-->

                        </div>
                    </div>
                </div>
                <!--End Footer-->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="bottom-inner">
                            <div class="footer-logo-style1">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/footer/footer-logo-gema.png') }}"
                                        alt="Awesome Logo" title="">
                                </a>
                            </div>
                            <div class="copyright">
                                <p>Copyright &copy; 2023 <a href="{{ route('home') }}">Gema: Software Solutions</a>
                                    Todos los
                                    derechos reservados.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </footer>
            <!--End footer area-->
        </div>


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>

        <!-- search-popup -->
        <!--div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="{{ route('home') }}">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="{{ route('home') }}">waste</a></li>
                        <li><a href="{{ route('home') }}">Dumpster</a></li>
                        <li><a href="{{ route('home') }}">Zerowaste</a></li>
                        <li><a href="{{ route('home') }}">Garbage</a></li>
                        <li><a href="{{ route('home') }}">trash</a></li>
                    </ul>
                </div>
            </div>
        </div--s>
        <!-- search-popup end -->
    </div>



    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-sidebar-content.js') }}"></script>
    <script src="{{ asset('assets/js/knob.js') }}"></script>
    <script src="{{ asset('assets/js/map-script.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/pagenav.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-1color-switcher.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

    <script src="{{ asset('assets/js/fa-icons.min.js') }}"></script>

    <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap" async
        defer></script-->


    <!-- thm custom script -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @livewireScripts
    @stack('scripts')


</body>

</html>
