<div>
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(/assets/images/breadcrumb/breadcrumb-1.jpg);">
        </div>
        <div class="shape-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">

                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                                <li class="active">Consumer Product</li>
                            </ul>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Servicios</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    {{-- {{ $servicio['descripcion'] }} --}}
    <!--Start Service Details area -->
    <section class="service-details-area">
        <div class="container">
            <div class="row">

                <!--Start Service Details Sidebar -->
                <div class="col-xl-4 col-lg-5 order-box-2">
                    <div class="service-details__sidebar">

                        <div class="view-all-service">
                            <ul class="service-pages">
                                @foreach ($listaServicios as $item)
                                    <li class="{{ $item['bEstado'] ? 'active' : '' }}">
                                        {{-- <a href="#" onclick="return false;" wire:click="cambioServicioId($item['id'])">
                                            {{ $item['descripcion'] }} <span class="icon-right-arrow"></span>
                                        </a> --}}
                                        {{-- <button  wire:click="cambioServicioId({{$item['id']}})">  <a href="#" onclick="return false;">
                                            {{ $item['descripcion'] }} <span class="icon-right-arrow"></span>
                                        </a></button> --}}
                                        <button  wire:click="cambioServicioId({{$item['id']}})">  {{ $item['descripcion'] }} <span class="icon-right-arrow"></span></button>

                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="service-details-contact-info text-center">
                            <div class="sidebar-info-box-bg"
                                style="background-image: url(/assets/images/sidebar/sidebar-info-box-bg.jpg);"></div>
                            <div class="icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h3>Contact with<br> us for any<br> advice</h3>
                            <h2><a href="tel:+50033333">+3-(856) 000-9850</a></h2>
                        </div>

                        <div class="info-download-box">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-download"></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="#">Download our Broucher</a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--End Service Details Sidebar -->

                <!--Start Service Details Content -->
                <div class="col-xl-8 col-lg-7 order-box-1">
                    <div class="service-details__content">
                        <div class="img-box-outer">
                            <div class="img-box1">
                                <img src="{{$servicio['ruta_foto_principal']}}" alt="" />
                            </div>
                            <div class="icon">
                                <span class="icon-creative"></span>
                            </div>
                        </div>

                        <div class="text-box1">
                            <h2>{{ $servicio['descripcion'] }}</h2>
                            <p>
                                {{ $servicio['detalle_descripcion_amplia'] }}
                            </p>

                        </div>

                        {{-- <div class="text-box2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="text-box2-single" data-aos="fade-right" data-aos-easing="linear"
                                        data-aos-duration="1500">
                                        <p>Refresing to get such a touch. Duis aute irure dolor in oluptate.</p>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="text-box2-single" data-aos="fade-left" data-aos-easing="linear"
                                        data-aos-duration="1500">
                                        <p>Velit esse cillum eu fugiat pariatur. Duis aute irure dolor in in
                                            voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{--  <div class="text-box3">
                            <p>When an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting. Lorem Ipsum has been the ndustry standard dummy text ever
                                since the 1500s.</p>
                        </div> --}}

                        <div class="text-box4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="img-box">
                                        <img style=" width: 370px; height: 320px" src="{{$servicio['ruta_foto_detalle']}}"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="content-box">
                                        <h2>Beneficios del Servicio</h2>
                                        <p>Los beneficios que brinda el servicio {{$servicio['descripcion']}} son:
                                        </p>

                                        <ul>
                                            @foreach ($servicio['beneficios'] as $beneficio)
                                                <li>
                                                    <span class="icon-check"></span> 
                                                    {{$beneficio['descripcion']}}
                                                </li>
                                            @endforeach
                                            
                                           
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{--     <div class="service-details-faq-content">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Interdum et malesuada fames ac ante ipsum</h3>
                                    </div>
                                    <div class="acc-content current">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                            ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Maecenas condimentum sollicitudin ligula.</h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                            ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Duis rhoncus orci ut metus rhoncus.</h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                            ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}

                    </div>
                </div>
                <!--End Service Details Content -->

            </div>
        </div>
    </section>
    <!--End Service Details area -->





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


                @foreach ($ultimosProyectos as $proyecto)
                    <!--Start Single Blog Style1-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="single-blog-style1">
                            <div class="img-holder">
                                <img src="<?php echo $proyecto['ruta_foto']; ?>" alt="">
                                <div class="date-box">
                                    <p>{{ $proyecto['fecha_implementacion'] }}</p>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="meta-info">
                                    <ul>
                                        <li><span class="icon-check"></span>
                                            <a href="#" data-toggle="modal"
                                                data-target="#modal{{ $proyecto['id'] }}">
                                                {{ $proyecto['empresa_cliente'] }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="#" data-toggle="modal" data-target="#modal{{ $proyecto['id'] }}">
                                        {{ $proyecto['descripcion'] }}
                                    </a>
                                </h3>
                                <div class="btn-box">
                                    <a href="blog-single.html">{{ $proyecto['servicio'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog Style1-->
                @endforeach



            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->


</div>
