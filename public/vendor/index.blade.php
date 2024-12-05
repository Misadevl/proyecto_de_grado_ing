<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Consultorio Médico Thomas Goletz</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Navegacion</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/logo1.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo1.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Inicio</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Nosotros</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Servicios</a></li>
                               
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contactanos</a></li>
                               
                                <button type="button"style="margin-top:30px;" class="btn btn-info"  onclick="window.location='{{ url('login') }}'">Agenda una Cita</button>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/11.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title">Consultorio Médico <br/> Thomas Goletz</h1>
                            <p class="promo-block-text">La salud &amp; Esta en tus manos</p>
                        </div>
                        <ul class="list-inline">
                            <li><a href="" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                          
                        </ul>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Mision y Vision</h2>
                            <p>lorem</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="margin-b-60">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste totam asperiores quasi atque. Facere impedit ratione excepturi dolorum? Molestias nulla a consequuntur culpa, dignissimos iste distinctio est nemo facilis perferendis!</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore similique explicabo placeat possimus delectus qui vel omnis tempora. Impedit perspiciatis quo dolores dolorem. Officia est architecto ratione maxime recusandae nostrum!</p>
                        </div>

                       
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Servicios</h2>
                                <p>lorem</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-chemistry"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Consulta Externa</h3>
                                            <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                        </div>
                                        <a  class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-badge"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Farmacia</h3>
                                            <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                        </div>
                                        <a class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/397x400/consul.jpeg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Volver</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Consulta Externa</h3>
                                                <span>Lorem</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus similique natus dignissimos expedita sequi! Unde, ex non. Alias consequatur placeat et eos pariatur officia. Esse, similique eum. Ullam, mollitia ratione?</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Doctor:</strong> Misael</p>
                                                        <p class="margin-b-5"><strong>Consultorios Asociados:</strong> Lorem</p>
                                                        <p class="margin-b-5"><strong>Direcciones:</strong> Lorem</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/397x400/farma.jpeg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Volver</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Farmacia</h3>
                                                <span>Lorem</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure voluptate expedita, quaerat suscipit tempora repudiandae officia nostrum beatae dicta modi sapiente ducimus, cumque molestiae distinctio fugit, quas hic ipsam blanditiis..</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Lorem:</strong> John Doe</p>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Experience -->

        <!-- Work -->
        
        <!-- End Work -->
            
        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Contactanos</h2>
                                <p>Lorem</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Direccion</h5>
                                    <a href="">Cochabamba-Vintoxxxxxxx</a>
                                </div>
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Celular</h5>
                                    <a href="">12345687</a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Email</h5>
                                    <a href="#">gmail@gmail.com</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo1.png" alt="Consultorio Medico Thomas Goletz Logo">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="">2024 </a>Consultorio Médico Thomas Goletz <a class="fweight-700" href="">Todos los Derechos Reservados</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Inicio</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{ asset('vendor/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-migrate.min.js') }}v" type="text/javascript"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{ asset('vendor/jquery.easing.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.appear.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/components/progress-bar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/components/masonry.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/components/wow.min.js') }}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>