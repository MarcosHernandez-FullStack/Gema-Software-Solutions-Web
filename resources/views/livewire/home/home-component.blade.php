<div>
    
    <!-- Start Main Slider -->
    <section class="main-slider style1">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/portada.png)">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Competitividad<span class="dotted"></span><br>
                                    Innovación<span class="dotted"></span><br>
                                    Personalización<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#nosotros">
                                    <span class="txt">
                                        Descubre más<i class="icon-refresh arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/portada2.png)">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Automatización<span class="dotted"></span><br>
                                    Conectividad<span class="dotted"></span><br>
                                    Accesibilidad<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#nosotros">
                                    <span class="txt">
                                        Descubre más<i class="icon-refresh arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/portada3.png)">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Transformación Digital<span class="dotted"></span><br>
                                    Interconexión<span class="dotted"></span><br>
                                    Escalabilidad<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#nosotros">
                                    <span class="txt">
                                        Descubre más<i class="icon-refresh arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!--Start About Style2 Area-->
    <section class="about-style2-area" id="nosotros">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6">
                    <div class="about-style2__content">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>Sobre nosotros</h3>
                            </div>
                            <h2>Transformamos ideas<br> empieza hoy</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <div class="icon">
                                    <span class="icon-recruit"></span>
                                </div>
                                <div class="inner-title">
                                    <h3>¿Quieres convertir tus conceptos en realidad digital?</h3>
                                </div>
                            </div>

                            <div class="text-box">
                                <p>Somos un equipo listo para transformar tus ideas en soluciones digitales. En
                                    Gema: Software Solutions, te ofrecemos asesoría experta para digitalizar tu
                                    negocio y nos encargamos de llevar a cabo la implementación.
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <ul>
                                        <li>
                                            <span class="icon-check"></span>
                                            Experiencia y Expertise.
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Soluciones a la Medida.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul>
                                        <li>
                                            <span class="icon-check"></span>
                                            Compromiso con la Calidad.
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Soporte y Colaboración Continuos.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">Descubre más</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style2__image clearfix">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="border-box float-bob-y"></div>
                        
                        <div class="inner">
                            <img src="assets/images/about/transformacion_digital2.jpg" alt="">
                            @if (count($ultimosProyectos) > 50) {{--definir la cantidad de proyectos para mostrar div--}}
                            <div class="overlay-content">
                                <div class="count-outer count-box">
                                    <span class="count-text">{{ count($ultimosProyectos) }}</span>
                                </div>
                                <h3>Proyectos Completados</h3>
                            </div>
                            @endif
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style2 Area-->


    <!--Start Service Style2 Area-->
    <section class="service-style2-area" id="servicios-seccion">
        <div class="service-style2--primary-bg"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>Nuestros Servicios</h3>
                </div>
                <h2>Adquiere soluciones a tu medida </h2>
            </div>
            <div class="row text-right-rtl">
                <div class="col-xl-12">
                    <div class="theme_carousel news-element-carousel owl-theme owl-carousel owl-nav-style-one rtl-carousel"
                            data-options='{
                                    "loop": true, 
                                    "margin": 30, 
                                    "autoheight":true, 
                                    "lazyload":true, 
                                    "nav": true, 
                                    "dots": false, 
                                    "autoplay": true, 
                                    "autoplayTimeout": 5000, 
                                    "smartSpeed": 500, 
                                    "navText": ["<span class=\"left icon-right-arrow\"></span>",
                                    "<span class=\"right icon-right-arrow\"></span>"], 
                                    "responsive":{ 
                                    "0" :{ "items": "1" }, 
                                    "600" :{ "items" : "1" }, 
                                    "768" :{ "items" : "2" }, 
                                    "992":{ "items" : "2" }, 
                                    "1200":{ "items" : "3" }
                                }
                            }'>
                            <!--Start Single Service Style2-->
                            @foreach ($servicios as $servicio)
                                <!--<div class="col-xl-4 col-lg-4 wow fadeInUp " data-wow-delay="00ms" data-wow-duration="1500ms">-->
                                    <div class="single-service-style2 "  >
                                        <div class="img-holder">
                                            <div class="inner">
                                                <img src="{{$servicio['ruta_foto_principal']}}" alt="">
                                            </div>
                                            <div class="icon">
                                                <span class="icon-creative"></span>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <h3><a href="{{ route('portafolio', ['servicio_id' => $servicio['id']]) }}">{{$servicio['nombre']}}</a></h3>
                                            <div class="text">
                                                <p>
                                                    {{$servicio['descripcion_resumida']}}
                                                </p>
                                            </div>
                                            <!--['servicio_id' => $servicio['id']-->
                                            <div class="btn-box">
                                                <a href="{{ route('portafolio',$servicio['id']) }}"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                <!--</div>-->
                            @endforeach
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    <!--End Service Style2 Area-->

    <!--Start Choose Area-->
    <section class="choose-area pb-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="choose-img-box">
                        <div class="border-box float-bob-y"></div>
                        <div class="img-holder">
                            <img src="assets/images/beneficios/beneficios3.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="choose-content-box">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>Beneficios</h3>
                            </div>
                            <h2>Expande tus ideas<br> al máximo</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <p>Sistematiza tus negocio con sistemas de información a la medida.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-right-arrow"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Digitalización de Procesos</h3>
                                            <p>Creamos módulos específicos y a tu medida.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-right-arrow"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Gestión de la información</h3>
                                            <p>Deja que el sistema haga todo por ti.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-right-arrow"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Presencia en línea.</h3>
                                            <p>Conquista la web: Tu marca, tu historia, en línea.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Choose Area-->



    <!--Start Blog Style1 Area-->
    <section class="blog-style1-area">
        <div class="blog-style1-area__bg"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>Nuestros Proyectos</h3>
                </div>
                <h2>Últimos proyectos</h2>
            </div>
            <div class="row">
                <div class="theme_carousel news-element-carousel owl-theme owl-carousel owl-nav-style-one rtl-carousel"
                            data-options='{
                                    "loop": true, 
                                    "margin": 30, 
                                    "autoheight":true, 
                                    "lazyload":true, 
                                    "nav": true, 
                                    "dots": false, 
                                    "autoplay": true, 
                                    "autoplayTimeout": 5000, 
                                    "smartSpeed": 500, 
                                    "navText": ["<span class=\"left icon-right-arrow\"></span>",
                                    "<span class=\"right icon-right-arrow\"></span>"], 
                                    "responsive":{ 
                                    "0" :{ "items": "1" }, 
                                    "600" :{ "items" : "1" }, 
                                    "768" :{ "items" : "2" }, 
                                    "992":{ "items" : "2" }, 
                                    "1200":{ "items" : "3" }
                                }
                            }'>

                                @foreach ($ultimosProyectos as $proyecto)
                                    <!--Start Single Blog Style1-->
                                    <!--<div class="col-xl-4 col-lg-12">-->
                                        <div class="single-blog-style1" data-aos="fade-down" data-aos-easing="linear"  data-aos-duration="1000">
                                            <div class="img-holder">
                                                <img src="{{$proyecto['ruta_foto']}}" alt="">
                                                <div class="date-box">
                                                    <p>{{ $proyecto['fecha_implementacion'] }}</p>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="meta-info">
                                                    <ul>
                                                        <li><span class="icon-check"></span>
                                                            <a href="#" onclick="return false;" data-toggle="modal"
                                                                data-target="#modal{{ $proyecto['id'] }}">
                                                                {{ $proyecto['empresa_cliente'] }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3>
                                                    <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal{{ $proyecto['id'] }}">
                                                        {{ $proyecto['nombre'] }}
                                                    </a>
                                                </h3>
                                                <div class="btn-box">
                                                    <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal{{ $proyecto['id'] }}">{{ $proyecto['servicio'] }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    <!--</div>-->
                                    <!--End Single Blog Style1-->
                                @endforeach
                </div>


            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->


    <!--Start Partner Area-->
    <!--section class="partner-area bg-white">
        <div class="container">
            <div class="brand-content">
                <div class="inner">
                    <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1 rtl-carousel">
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-logo-1.png"
                                    alt="Awesome Image"></a>
                        </li>
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-logo-2.png"
                                    alt="Awesome Image"></a>
                        </li>
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-logo-3.png"
                                    alt="Awesome Image"></a>
                        </li>
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-logo-4.png"
                                    alt="Awesome Image"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section-->
    @livewire('precios')
    @livewire('sociales')
    @livewire('contacto')

    @foreach ($ultimosProyectos as $proyecto)
        <div class="modal fade" id="modal{{ $proyecto['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="modalLabel{{ $proyecto['id'] }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="color: black" class="modal-title" id="modalLabel{{ $proyecto['id'] }}">
                            {{ $proyecto['nombre'] }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       {{--  @foreach ($proyecto['sub_servicio_detalle'] as $index => $detalle)
                        {{$detalle['ruta_foto']}}
                        @endforeach --}}
                        <div id="carouselExample{{ $proyecto['id'] }}" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($proyecto['sub_servicio_detalle'] as $index => $detalle)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ $detalle['ruta_foto'] }}" class="d-block w-100"
                                            alt="Detalle {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample{{ $proyecto['id'] }}"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="sr-only" style="color:black">Previous</span>
                                {{--  <p style="color:black"><</p> --}}
                            </a>
                            <a class="carousel-control-next" href="#carouselExample{{ $proyecto['id'] }}"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                                 >

                            </a>
                        </div>
                    </div>
                    {{--    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach
</div>

