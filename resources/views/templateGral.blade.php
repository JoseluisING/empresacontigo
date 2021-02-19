<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EmpresaContigo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/general/img/favicon.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets/general/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/slick.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/general/css/style.css')}}">

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/general/img/logo/loder.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header_area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="{{route('index')}}"><img src="{{ asset('assets/general/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{route('index')}}">Inicio</a></li>
                                            @if (Route::has('login'))
                                            @auth
                                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                            @else
                                            <li><a href="{{ route('login') }}">Loggin</a></li>
                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Registrar</a></li>
                                            @endif
                                            @endauth
                                            @endif
                                            <li><a href="{{route('acercade')}}">Acerca de</a></li>
                                    
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{route('contact')}}">Contactanos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">Contact Now</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        @yield('content')

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('assets/general/img/logo/logo2_footer.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Services</h4>
                                    <ul>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#"> SEO Service</a></li>
                                        <li><a href="#">Digital market</a></li>
                                        <li><a href="#">Content create</a></li>
                                        <li><a href="#">Find Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Customer Care</h4>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">News & Articles</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#"> Terms of Use</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4><span>+564</span> 7885 3222</h4>
                                    <ul>
                                        <li><a href="#">youremail@gmail.com</a></li>
                                    </ul>
                                    <p>123 East 26th Street, Fifth Floor, New York, NY 10011</p>
                                </div>
                                <!-- footer social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('assets/general/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('assets/general/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('assets/general/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/general/js/bootstrap.min.js')}}"></script>

	    <!-- Jquery Mobile Menu -->
        
        <script src="{{ asset('assets/general/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('assets/general/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/general/js/slick.min.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        
        <script src="{{ asset('assets/general/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/general/js/animated.headline.js')}}"></script>
        <script src="{{ asset('assets/general/js/query.magnific-popup.js')}}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{ asset('assets/general/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/general/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('assets/general/js/contact.js')}}"></script>
        <script src="{{ asset('assets/general/js/jquery.form.js')}}"></script>
        <script src="{{ asset('assets/general/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('assets/general/js/mail-script.js')}}"></script>
        <script src="{{ asset('assets/general/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('assets/general/js/plugins.js')}}"></script>
        <script src="{{ asset('assets/general/js/main.js')}}"></script>
    </body>
</html>