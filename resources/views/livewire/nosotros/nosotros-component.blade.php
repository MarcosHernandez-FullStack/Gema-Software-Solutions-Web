<div>
    {{--  @livewire("layouts.header-component") --}}
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(assets/images/headers/HEADER-NOSOTROS.png);">
        </div>
        <div class="shape-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">

                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="active">Nosotros</li>
                            </ul>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Nosotros</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start About Style2 Area-->
    <section class="about-style2-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="about-style1__image clearfix">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="inner">
                            <img src="assets/images/about/nosotros2.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style2__content about-style2__content--in-about-style3">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>Sobre la Empresa</h3>
                            </div>
                            <h2>¿Quiénes somos?</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <div class="icon">
                                    <span class="icon-recruit"></span>
                                </div>
                                <div class="inner-title">
                                    <h3>Somos una agencia de desarrollo de software que ofrece
                                        soluciones tecnológicas al público en general. <span>Gema Software Solutions</span>  reúne a
                                        un equipo talentoso de desarrolladores y diseñadores que proporcionan respuestas
                                        a medida para diversas necesidades. </h3>
                                </div>
                            </div>
                            <!--ul>
                                        <li>
                                            <span class="icon-check"></span>
                                            Nsectetur cing elit.
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Suspe ndisse suscipit sagittis leo.
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Entum estibulum dignissim posuere.
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Donec tristique ante vel sem dictum rhoncus.
                                        </li>
                                    </ul>

                                    <div class="signature-box">
                                        <h2>Kevin Martin <span>- CO Founder</span></h2>
                                    </div-->

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    @livewire('contacto.sociales-component')
</div>


