<div>
            <!-- Main header-->
            <header class="main-header header-style-one">

                <!--Start Header-->
                <div class="header">
                    <div class="auto-container">
                        <div class="outer-box">
    
                            <!--Start Header Left-->
                            <div class="header-left">
                                <div class="main-logo-box">
                                    <a href="{{ route('home') }}">
                                        <img src="/assets/images/footer/footer-logo-gema.png" alt="Awesome Logo" title="">
                                    </a>
                                </div>
    
    
                                <div class="nav-outer style1 clearfix">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler">
                                        <div class="inner">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </div>
                                    </div>
                                    <!-- Main Menu -->
                                    <nav class="main-menu style1 navbar-expand-md navbar-light">
                                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li class=" @if(Route::currentRouteName() === 'home') current @endif"><a href="{{ route('home') }}"><span>INICIO</span></a>
                                                </li>
                                                <li class=" @if(Route::currentRouteName() === 'nosotros') current @endif"><a href="{{ route('nosotros') }}"><span>NOSOTROS</span></a>
                                                  
                                                </li>
                                                <li class=" @if(Route::currentRouteName() === 'portafolio') current @endif dropdown"><a href="#servicios-seccion"><span>SERVICIOS</span></a>
                                                    <ul>
                                                        @foreach ($servicios as $servicio)
                                                        <li><a href="{{ route('portafolio',$servicio['id']) }}">{{$servicio['nombre']}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                
                                                    
                                                
                                                <li class=" @if(Route::currentRouteName() === 'proyectos') current @endif"><a href="{{ route('proyectos') }}"><span>PORTAFOLIO</span></a>
                                                    
                                                </li>
                                                <li class="@if(Route::currentRouteName() === 'contacto') current @endif"><a href="{{ route('contacto') }}"><span>CONTACTO</span></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                    
                                    <!-- Main Menu End-->
                                </div>
    
    
                            </div>
                            <!--End Header Left-->
    
                            <!--Start Header Right-->
                            <div class="header-right">
                                <div class="phone-number-box1">
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="phone">
                                        <a href="tel:+51968372292">+51 968 372 292</a>
                                    </div>
                                </div>
                                <!--div class="serach-button-style1">
                                    <button type="button" class="search-toggler">
                                        <i class="icon-magnifying-glass"></i>
                                    </button>
                                </div-->
                            </div>
                            <!--End Header Right-->
    
                        </div>
                    </div>
                </div>
                <!--End header-->
    
                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="container">
                        <div class="clearfix">
                            <!--Logo-->
                            <div class="logo float-left">
                                <a href="{{ route('home') }}" class="img-responsive">
                                    <img src="assets/images/footer/footer-logo-gema.png" alt="" title="">
                                </a>
                            </div>
                            <!--Right Col-->
                            <div class="right-col float-right">
                                <!-- Main Menu -->
                                <nav class="main-menu clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Sticky Header-->
    
                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="{{ route('home') }}"><img src="assets/images/footer/footer-logo-gema.png"
                                    alt="" title=""></a></div>
                        <div class="menu-outer">
                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        </div>
                        <!--Social Links-->
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                                <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                                <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                                <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->
            </header>
</div>
