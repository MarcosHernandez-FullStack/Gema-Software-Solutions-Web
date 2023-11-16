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
                                <li><a href="{{ route('home') }}">Inicio</a></li>
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
                @foreach ($proyectos as $proyecto)
                    <!--Start Single Blog Style1-->
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-blog-style1 mb-5" style="padding-bottom: 40px;height: 100%!important;">
                            <div class="img-holder">
                                <img src="{{ $proyecto['ruta_foto'] }}" alt="">
                                <div class="date-box">
                                    <p>{{ $proyecto['fecha_implementacion'] }}</p>
                                </div>
                            </div>
                            <div class="text-holder d-flex flex-column justify-content-between" style="height: 50%;">
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
                                    <a href="#" onclick="return false;" data-toggle="modal"
                                        data-target="#modal{{ $proyecto['id'] }}">
                                        {{ $proyecto['nombre'] }}
                                    </a>
                                </h3>
                                <div class="btn-box mt-auto">
                                    <a href="#" onclick="return false;" data-toggle="modal"
                                        data-target="#modal{{ $proyecto['id'] }}">{{ $proyecto['servicio'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog Style1-->
                @endforeach
            </div>
            @if (!empty($paginacion))
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="styled-pagination text-center clearfix">
                            <li class="arrow prev"><button @if ($paginacion['actual'] - 1 < 0) disabled @endif
                                    wire:click="cambioPagina(@if ($paginacion['actual'] - 1 > 0) {{ $paginacion['actual'] - 1 }} @else 1 @endif)"><span
                                        class="icon-right-arrow left"></span></button></li>
                            <!--@php
                                $imprimePuntos = true;
                            @endphp
                        @foreach (range(1, $paginacion['total']) as $pagina)
@if ($pagina > 2 && $pagina < $paginacion['total'] - 2)
@if ($imprimePuntos)
<li ><button disabled>...</button></li>
@endif
                                @php
                                    $imprimePuntos = false;
                                @endphp
@else
<li class="@if ($pagina === $paginacion['actual']) active @endif"><button wire:click="cambioPagina({{ $pagina }})" >{{ $pagina }}</button></li>
@endif
@endforeach-->
                            @foreach (range(1, $paginacion['total']) as $pagina)
                                <li class="@if ($pagina === $paginacion['actual']) active @endif"><button
                                        wire:click="cambioPagina({{ $pagina }})">{{ $pagina }}</button>
                                </li>
                            @endforeach
                            <li class="arrow next"><button @if ($paginacion['actual'] + 1 > $paginacion['total']) disabled @endif
                                    wire:click="cambioPagina(@if ($paginacion['actual'] + 1 > $paginacion['total']) {{ $paginacion['total'] }} @else {{ $paginacion['actual'] + 1 }} @endif)"><span
                                        class="icon-right-arrow"></span></button></li>
                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </section>
    <!--End Blog Page One-->


    @foreach ($proyectos as $proyecto)
        <div class="modal fade" id="modal{{ $proyecto['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="modalLabel{{ $proyecto['id'] }}" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="color: black" class="modal-title" id="modalLabel{{ $proyecto['id'] }}">
                            {{ $proyecto['nombre'] }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- @foreach ($proyecto['sub_servicio_detalle'] as $index => $detalle)
                    {{$detalle['ruta_foto']}}
                    @endforeach --}}
                        <div id="carouselExample{{ $proyecto['id'] }}" class="carousel carousel-dark slide "
                            data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($proyecto['sub_servicio_detalle'] as $index => $detalle)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }} ">
                                        <img src="{{ $detalle['ruta_foto'] }}" class="d-block w-100"
                                            alt="Detalle {{ $index + 1 }}">
                                        <div class="carousel-caption d-none d-md-block "
                                            style="width: 100%;left:0%;right:0%;color: var(--thm-primary);font-size: 2rem; background-color: rgba(32, 186, 209, 0.7);">
                                            <p class="">{{ $detalle['nombre'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" style="opacity: 1!important"
                                href="#carouselExample{{ $proyecto['id'] }}" role="button" data-slide="prev">
                                <span><i class="fa-solid fa-arrow-left fa-beat fa-2xl"
                                        style="color: #20BAD1;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" style="opacity: 1!important"
                                href="#carouselExample{{ $proyecto['id'] }}" role="button" data-slide="next">
                                <span><i class="fa-solid fa-arrow-right fa-beat fa-2xl"
                                        style="color: #20BAD1;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div> --}}
                </div>
            </div>
        </div>
    @endforeach

</div>
