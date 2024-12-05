<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DASHMIN - Bootstrap Admin Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="index.html" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary"> .</h3>
                    </a>

                    <div class="navbar-nav w-100">
                        <a href="index.html" class="nav-item nav-link active"><i
                                class="fa fa-tachometer-alt me-2"></i>Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fa fa-laptop me-2"></i>Citas Médicas</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('mis-citas') }}" class="dropdown-item">Mis citas</a>
                                <a href="#" class="dropdown-item">Citas Pendientes</a>
                                <a href="#" class="dropdown-item">HIstorial de Citas</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Consultorios</a>
                        <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Pacientes</a>
                        <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Médicos</a>
                        <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Horarios</a>
                        <a href="{{ route('admin.roles.index') }}" class="nav-item nav-link"><i
                                class="fa fa-chart-bar me-2"></i>Roles</a>
                        <a href="{{ route('admin.users.index') }}" class="nav-item nav-link"><i
                                class="fa fa-chart-bar me-2"></i>Usuarios</a>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->

                <!-- Navbar End -->


                <!-- Blank Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Crear Usuario</h6>
                                <form action="{{ route('admin.users.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" required>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Segundo Nombre</label>
                                        <input type="text" class="form-control" id="second_name" name="second_name"
                                        value="{{ old('second_name') }}" required>
                                        <div id="emailHelp" class="form-text">Si solo tiene un nombre, puedes dejarlo en blanco.
                                        </div> 
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ old('last_name') }}" required>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" id="second_surname" name="second_surname"
                                value="{{ old('second_surname') }}" required>
                                        <div id="emailHelp" class="form-text">Si solo tiene un apellido, puedes dejarlo en blanco.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" required>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Género</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="">Seleccione su Género</option>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculino</option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Femenino
                                            </option>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Número de Contacto</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}" required>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Rol</label>
                                        <select name="role" id="role"
                                class="form-control @error('role') is-invalid @enderror" required>
                                <option value="">Seleccione un rol</option>

                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ old('role') == $role->name ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">

                                    <strong>{{ $message }}</strong>

                                </span>
                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Crear Usuario</button>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="container">
                    <h1>Create User</h1>

                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ old('last_name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="">-- Select Gender --</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculino</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Femenino
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ old('phone') }}" required>
                        </div>

                        

                        <div class="form-group mb-3">

                            <label for="role">Rol</label>

                            <select name="role" id="role"
                                class="form-control @error('role') is-invalid @enderror" required>

                                <option value="">Seleccione un rol</option>

                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ old('role') == $role->name ? 'selected' : '' }}>

                                        {{ $role->name }}

                                    </option>
                                @endforeach

                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">

                                    <strong>{{ $message }}</strong>

                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
 --}}

                <!-- Blank End -->


                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#">Consultorio Médico Thomas Goletz</a>, Todos los Derechos
                                Reservados.
                            </div>
                            <div class="col-12 col-sm-6 text-center text-sm-end">
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Desarrollado por <a href="#">Misael Marquez</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
</x-app-layout>
