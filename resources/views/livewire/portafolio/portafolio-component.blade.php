<div>
     <!--Start breadcrumb area paroller-->
     <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        </div>
        <div class="shape-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">

                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active">News Block 03</li>
                            </ul>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Portfolio de servicio: {{$servicio->descripcion}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </section>
    <!--End breadcrumb area-->
    <!--Start News Element Page03-->
    <section class="news-element-page03">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <span class="icon-heartbeat"></span>
                </div>
                <div class="sub-title">
                    <h3>Nuestros Proyectos</h3>
                </div>
                <h2>Últimos Proyectos</h2>
           <!-- Button trigger modal -->


            </div>
            <div class="row">
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

                        @foreach ($servicio->sub_servicios as $sub_servicio)

                        <!--Start Single Blog Style1-->
                        <div class="single-blog-style1" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1000">
                            <div class="img-holder">
                                <img src="assets/images/portfolio/portfolioexample1.png" alt="">
                                <div class="date-box">
                                    <p>{{$sub_servicio->fecha_implementacion}}</p>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="meta-info">
                                    <ul>
                                        <li><span class="icon-check"></span><a href="#">{{$sub_servicio->empresa_cliente}}</a>
                                        </li>
                                        <!--  <li><span class="icon-conversation"></span><a href="#">2 Comments</a></li> -->
                                    </ul>
                                </div>
                                <h3><a href="blog-single.html">{{$sub_servicio->descripcion}}</a>
                                </h3>
                                <div class="btn-box">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
                        </div>
                            
                        @endforeach
                       
                       

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End News Element Page03-->
</div>
