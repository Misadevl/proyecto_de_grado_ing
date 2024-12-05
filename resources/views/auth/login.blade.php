<x-guest-layout>

    

    <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Consultorio Médico Thomas Goletz</title>
        <meta name="description" content="Sistema de informacion de Citas Médicas">
        <meta name="author" content="Misael Marquez">
        <!-- Favicon -->

        <!-- Fonts -->

        <!-- Icons -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


        <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="bg-default">
        <!-- Navbar -->
        <nav id="navbar-main"
            class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ URL('/') }}">
                    <img src="img/logo1.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <div class="navbar-collapse-header">
                        <div class="row">

                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav align-items-lg-left ml-lg-auto">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <span class="nav-link-inner--text">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav-link">
                                <span class="nav-link-inner--text">Nosotros</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="register.html" class="nav-link">
                                <span class="nav-link-inner--text">Servicios</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="register.html" class="nav-link">
                                <span class="nav-link-inner--text">Contactanos</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="main-content">
            <!-- Header -->
            <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <h1 class="text-white">Bienvenido</h1>
                                <p class="text-lead text-white">Aqui debes iniciar sesión para poder agendar una cita.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </div>
            <!-- Page content -->
            <div class="container mt--8 pb-5">
                <div  class="row justify-content-center">
                  <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                      <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Iniciar Sesión con</small></div>
                        <div class="btn-wrapper text-center">
                          
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="img/google.svg"></span>
                            <span style="color: #000;" class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                          <small>O Iniciar Sesión con tu correo</small>
                        </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">


                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            </div>

                                            <x-input id="email" class="block mt-1 w-full form-control"
                                                placeholder="Email" type="email" name="email" :value="old('email')"
                                                required autofocus autocomplete="username"></x-input>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="bi bi-unlock-fill"></i></span>
                                            </div>
                                            <x-input id="password" class="block mt-1 w-full form-control"
                                                placeholder="Contraseña" type="password" name="password" required
                                                autocomplete="current-password" />
                                        </div>
                                    </div>

                                    
                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                   
                                        
                                        <div class="text-center">
                                            
                                            <x-button class="btn btn-primary my-4">
                                                {{ __('Iniciar Sesión') }}
                                            </x-button>
                                          </div>
                                        
                                    
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu Contraseña?') }}
                                            </a>
                                        @endif
                                        </div>
                                        <div class="col-6 text-right">
                                          <a class="underline text-sm text-gray-600 hover:text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}" >{{ __('Eres nuevo Paciente? Create una cuenta') }}</a>
                                        </div>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-5" id="footer-main">
            <div class="content container">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo1.png" alt="Consultorio Medico Thomas Goletz Logo">
                    </div>
                    <div class="col-xl-6">
                        <p class="margin-b-0"><a class="fweight-700" href="">2024 </a>Consultorio Médico
                            Thomas Goletz <a class="fweight-700" href="">Todos los Derechos Reservados</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}" type="text/javascript"></script>
    </body>

    </html>
</x-guest-layout>
