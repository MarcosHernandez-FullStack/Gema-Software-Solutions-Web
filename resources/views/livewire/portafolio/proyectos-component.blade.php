<div>
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(assets/images/headers/HEADER-PROYECTOS.png);">
        </div>
        <div class="shape-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">

                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Portafolio de Proyectos</li>
                            </ul>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Nuestros Proyectos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Blog Page One-->
    <section class="blog-page-one">
        <div class="container">
            <div class="row">
                @foreach ($ultimosProyectos as $proyecto)
                <!--Start Single Blog Style1-->
                <div class="col-xl-4 col-lg-6">
                    <div class="single-blog-style1">
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
                                    <!--li><span class="icon-conversation"></span><a href="#">2 Comments</a></li-->
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
                </div>
                <!--End Single Blog Style1-->
                @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="styled-pagination text-center clearfix">
                        <li class="arrow prev"><a href="#"><span class="icon-right-arrow left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li class="arrow next"><a href="#"><span class="icon-right-arrow"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!--End Blog Page One-->

   
</div>
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
