@extends('templateGral')
@section('content')

    <!-- slider Area Start-->
    <div class="slider-area  slider-height" data-background="{{ asset('assets/general/img/hero/h1_hero.jpg') }}">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero__img">
                        <img src="{{ asset('assets/general/img/hero/hero_img.jpg') }}" alt="" data-animation="fadeInRight"
                            data-transition-duration="5s">
                    </div>
                    <div class="hero__caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s"> <br>Colaboradores sanos, empresa sana</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">El sistema de evaluación organizacional que te ayuda
                            a cumplir, implementar y administrar la nueva NOM-035 para llevar el control de cada trabajador
                            y prevenir riesgos psicosociales en tu empresa..</p>
                        <!-- Hero Btn -->
                        <a href="#" class="hero-btn" data-animation="fadeInLeft" data-delay=".9s">
                            View project
                            <!-- Arrow SVG icon -->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path
                                    d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
                                   c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
                                   l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
                                   c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero__img">
                        <img src="{{ asset('assets/general/img/hero/hero_img2.jpg') }}" alt="" data-animation="fadeInRight"
                            data-transition-duration="5s">
                    </div>
                    <div class="hero__caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s">NOM 035<br></h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">La NOM 035 tiene como objetivo establecer los elementos para identificar, analizar y prevenir los factores de riesgo psicosocial, así como para promover un entorno organizacional favorable en los centros de trabajo.</p>
                        <!-- Hero Btn -->
                        <a href="#" class="hero-btn" data-animation="fadeInLeft" data-delay=".9s">
                            View project
                            <!-- Arrow SVG icon -->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path
                                    d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
                                   c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
                                   l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
                                   c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero__img">
                        <img src="{{ asset('assets/general/img/hero/hero_img.jpg') }}" alt="" data-animation="fadeInRight"
                            data-transition-duration="5s">
                    </div>
                    <div class="hero__caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s">¿Qué gana la empresa involucrándose al cumplir con la NOM-035?<br></h1>
                            <p data-animation="fadeInLeft" data-delay=".6s">
                            Transformar y consolidar su cultura organizacional<br>
                            Promover una cultura de liderazgo<br>
                            Crecimiento individual y grupal<br>
                            Lealtad y sentido de pertenencia<br>
                            Reducción de desperdicio<br>
                            Buen ambiente laboral<br>
                            Mayor productividad, igual a mejores y mayores ingresos</p>
                        <!-- Hero Btn -->
                        <a href="#" class="hero-btn" data-animation="fadeInLeft" data-delay=".9s">
                            View project
                            <!-- Arrow SVG icon -->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path
                                    d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
                                   c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
                                   l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
                                   c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    
    <!-- Our Services Start -->
    <div class="our-services  pt-50 pb-150">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>DETECTA</h5>
                            <p>Identifica a los colaboradores que hayan experimentado ATS o FRPs con la Guía de Referencia I y II.<br><br><br><br></p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>EVALÚA</h5>
                            <p>Comprueba el estado de tu entorno organizacional con el Cuestionario de Referencia III. Extrae todos los datos que necesites y analízalos desde el apartado de dashboards e informes.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>ANALIZA</h5>
                            <p>Estudia los resultados de los cuestionarios con el sistema de dashboards y reportes.<br><br><br><br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!--All startups Start -->
    <div class="all-starups-area fix">
        <!-- left Contents -->
        <div class="starups">
            <div class="starups-details">
                <h3>Beneficios de tener un
                    entorno organizacional favorable</h3>
                <!-- Details -->
                <div class="starups-list">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                height="30px">
                                <path fill-rule="evenodd" fill="rgb(4, 219, 236)"
                                    d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z" />
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px"
                                    x="9px" y="22.0320000000002px">&#58956;</text>
                            </svg>
                        </li>
                        <li>
                            <p>Prevenir factores de riesgo psicosocial y violencia laboral.</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                height="30px">
                                <path fill-rule="evenodd" fill="rgb(4, 219, 236)"
                                    d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z" />
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px"
                                    x="9px" y="22.0320000000002px">&#58956;</text>
                            </svg>
                        </li>
                        <li>
                            <p>Reconocer el trabajo entre colaboradores y directivos.</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                height="30px">
                                <path fill-rule="evenodd" fill="rgb(4, 219, 236)"
                                    d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z" />
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px"
                                    x="9px" y="22.0320000000002px">&#58956;</text>
                            </svg>
                        </li>
                        <li>
                            <p>Mejorar sus áreas de oportunidad con base en soluciones.</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                height="30px">
                                <path fill-rule="evenodd" fill="rgb(4, 219, 236)"
                                    d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z" />
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px"
                                    x="9px" y="22.0320000000002px">&#58956;</text>
                            </svg>
                        </li>
                        <li>
                            <p>Compenetrar en sus equipos de trabajo para lograr eficiencia.</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                height="30px">
                                <path fill-rule="evenodd" fill="rgb(4, 219, 236)"
                                    d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z" />
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px"
                                    x="9px" y="22.0320000000002px">&#58956;</text>
                            </svg>
                        </li>
                        <li>
                            <p>Gestionar o evitar de mejor manera su presión laboral.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Right Contents  -->
        <div class="starups-img"></div>
    </div>
    <!--All startups End -->  
    <!-- Want To Work Start -->
    <div class="wantToWork-area wantToWork-area2 w-padding2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Envianos un mensaje si quieres adquirir nuestro servicio web.</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <a href="#" class="btn btn-black f-right">Contactanos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->


@endsection
