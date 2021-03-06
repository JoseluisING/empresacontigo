@extends('templateGral')
@section('content')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{ asset('assets/general/img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Contactanos</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- ================ contact section start ================= -->
<section class="contact-section-top">  
        <div class="container">           
                <h3 class="mb-30">Empresa Contigo</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “A continuación podra ver la dirección, número y correo electronico con el cual usted puede estar en comunicacion con nosotros”
                        </blockquote>
                    </div>
                </div>
           
                <div class="col-lg-7 offset-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>San Martin Azcatepec, San Martín Azcatepec</h3>
                            <p>Estado de México</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+52 55421770669</h3>
                            <p>Lunes a Viernes 9am a 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>empresacontigo035@gmail.com</h3>
                            <p>Envia un correo si necesitas ayuda!</p>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
<!-- ================ contact section end ================= -->


@endsection