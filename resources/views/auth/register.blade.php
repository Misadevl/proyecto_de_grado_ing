<x-guest-layout>
    

        <x-validation-errors class="mb-4" />
        <!DOCTYPE html>
        <html>
        
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="Sistema de informacion de Citas Médicas">
          <meta name="author" content="Misael Marquez">
          <title>Registrarse | Consultorio Médico Thomas Goletz</title>
          <!-- Favicon -->
          
          <!-- Fonts -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
          <!-- Icons -->
          
          <!-- Argon CSS -->
          <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
           <!-- PAGE LEVEL PLUGIN STYLES -->
          <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
           <!-- THEME STYLES -->
           <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css"/>
        </head>
        
        <body class="bg-default">
          <!-- Navbar -->
          <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="{{ URL('/'); }}">
                <img src="img/logo1.png">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                  <div class="row">
                    <div class="col-6 collapse-brand">
                      <a href="dashboard.html">
                        <img src="../assets/img/brand/blue.png">
                      </a>
                    </div>
                    <div class="col-6 collapse-close">
                      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
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
          <!-- Main content -->
          <div class="main-content">
            <!-- Header -->
            <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
              <div class="container">
                <div class="header-body text-center mb-7">
                  <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                      <h1 class="text-white">Crear una Cuenta</h1>
                      <p class="text-lead text-white">Registrate para poder agendar una cita médica.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
              </div>
            </div>
            <!-- Page content -->
            <div class="container mt--8 pb-5">
              <!-- Table -->
              <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                  <div class="card bg-secondary border-0">
                    <div class="card-header bg-transparent pb-5">
                      <div class="text-muted text-center mt-2 mb-4"><small>Registrate con</small></div>
                      <div class="text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                          <span class="btn-inner--icon"><img src="img/google.svg"></span>
                          <span style="color: #000; class="btn-inner--text">Google</span>
                        </a>
                      </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                      <div class="text-center text-muted mb-4">
                        <small>O Registrate con tu Correo</small>
                      </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            


                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                      </div>
                      {{-- <x-label for="name" value="{{ __('Name') }}" /> --}}
                      <x-input id="name" class="block mt-1 w-full form-control" placeholder="Nombre" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name" />
                    </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                    </div>
                    {{-- <x-label for="name" value="{{ __('Name') }}" /> --}}
                    <x-input id="second_name" class="block mt-1 w-full form-control" placeholder="Segundo Nombre" type="text" name="second_name" :value="old('second_name')" required
                        autofocus autocomplete="second_name" />
                  </div>
              </div>
                
            
            

                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-person-video2"></i></span>
                      </div>
                      {{-- <x-label for="last_name" value="{{ __('Apellido') }}" /> --}}
                <x-input id="last_name" class="block mt-1 w-full form-control" placeholder="Apellido" type="text" name="last_name" :value="old('last_name')"
                    required autofocus autocomplete="last_name" />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-person-video2"></i></span>
                      </div>
                      {{-- <x-label for="last_name" value="{{ __('Apellido') }}" /> --}}
                <x-input id="second_surname" class="block mt-1 w-full form-control" placeholder="Segundo Apellido" type="text" name="second_surname" :value="old('second_surname')"
                    required autofocus autocomplete="second_surname" />
                    </div>
                  </div>
                
            
            



                <div class="form-group">
                    
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        <x-label class="form_control" for="gender" value="{{ __('Género') }}" />
                      </div>
              
               <select id="gender" name="gender" class="block mt-1 w-full">
                          <option value="male">Masculino</option>
                          <option value="female">Femenino</option>
                      </select>
                    </div>
                  </div>
                
            
            

                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-telephone-inbound"></i></span>
                      </div>
                     {{--  <x-label for="phone" value="{{ __('Número de Contacto') }}" /> --}}
                      <x-input id="phone" class="block mt-1 w-full form-control" placeholder="Número de Contacto" type="tel" name="phone"
                          :value="old('phone')" required autofocus autocomplete="phone" />
                    </div>
                  </div>
                
            
            <div class="mt-4">


                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      </div>
                      {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                      <x-input id="email" class="block mt-1 w-full form-control" placeholder="Email" type="email" name="email" :value="old('email')"
                          required autocomplete="username" />
                    </div>
                  </div>
                
            </div>

            <div class="mt-4">


                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                      </div>
                      {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                      <x-input id="password" class="block mt-1 w-full form-control" placeholder="Contraseña" type="password" name="password" required
                          autocomplete="new-password" />
                    </div>
                  </div>
                
            </div>

            <div class="mt-4">
                {{-- <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-unlock"></i></span>
                      </div>
                      {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                      <x-input id="password_confirmation" class="block mt-1 w-full form-control" placeholder="Confirmar Contraseña" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                    </div>
                  </div>
                
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('Acepto los :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="text-center">
                <x-button class="btn btn-primary my-4">
                    {{ __('Registrarse') }}
                </x-button>
                </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Ya tienes cuenta?') }}
                </a>
                
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="py-5" id="footer-main">
<div class="content container">
<div class="row align-items-center justify-content-xl-between">
  <div class="col-xs-6">
      <img class="footer-logo" src="img/logo1.png" alt="Consultorio Medico Thomas Goletz Logo">
  </div>
  <div class="col-xl-6">
    <p class="margin-b-0"><a class="fweight-700" href="">2024 </a>Consultorio Médico Thomas Goletz <a class="fweight-700" href="">Todos los Derechos Reservados</a></p>
  </div>
</div>
<!--// end row -->
</div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>
</x-guest-layout>
