<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="border-box"></div>
                <h3>Contáctanos</h3>
            </div>
            <h2>Escribe un mensaje</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form2"
                        wire:submit.prevent ="cargarData">

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">

                                        <input wire:model.defer="nombre" type="text" name="form_name" id="formName"
                                            placeholder="Nombre Completo" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input wire:model.defer="email" type="email" name="form_email" id="formEmail"
                                            placeholder="Correo Electrónico" required="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input wire:model.defer="telefono" type="text" name="form_phone"
                                            value="" id="formPhone" placeholder="Teléfono">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input wire:model.defer="asunto" type="text" name="form_subject"
                                            value="" id="formSubject" placeholder="Asunto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <textarea wire:model.defer="mensaje" name="form_message" id="formMessage" placeholder="Escribe un mensaje"
                                            required=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="button-box">

                                    <button class="btn-one" type="submit">
                                        <span class="txt">
                                            Enviar mensaje
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Main Contact Form Area-->
{{-- @section('nav')
<nav class="main-menu style1 navbar-expand-md navbar-light">
    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
        <ul class="navigation clearfix">
            <li class=" @if (Route::currentRouteName() === 'home') current @endif"><a href="{{ route('home') }}"><span>INICIO</span></a>
            </li>
            <li class=" @if (Route::currentRouteName() === 'nosotros') current @endif"><a href="{{ route('nosotros') }}"><span>NOSOTROS</span></a>

            </li>
            <li class=" @if (Route::currentRouteName() === 'servicios') current @endif dropdown"><a href="#"><span>SERVICIOS</span></a>
                <ul>
                    @foreach ($servicios as $servicio)
                    <li><a href="{{ route('portafolio',$servicio['id']) }}">{{$servicio['nombre']}}</a></li>
                    @endforeach
                </ul>
            </li>



            <li class=" @if (Route::currentRouteName() === 'proyectos') current @endif"><a href="{{ route('proyectos') }}"><span>PORTAFOLIO</span></a>

            </li>
            <li class="@if (Route::currentRouteName() === 'contacto') current @endif"><a href="{{ route('contacto') }}"><span>CONTACTO</span></a></li>
        </ul>
    </div>
</nav>

@endsection --}}
