<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Panel de Control | Consultorio Médico Thomas Goletz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
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
                    <a href="{{ route('admin.patients.index') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Pacientes</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Médicos</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Horarios</a>
                    <a href="{{ route('admin.roles.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Roles</a>
                    <a href="{{ route('admin.users.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Usuarios</a>
                </div>
            </nav>
        </div>

        <!-- Content Start -->
        <div class="content">
            
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-calendar-check fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Citas</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-person-fill-gear fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Médicos</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-person-wheelchair fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pacientes</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Pacientes Registrados Recientemente</h6>
                        <a href="">Mostrar Todos</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <!--<th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">ID</th>
                                    <th scope="col">Carnet</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Fecha</th>
                                   <!-- <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <!--<td><input class="form-check-input" type="checkbox"></td> -->
                                    <td>12345678</td>
                                    <td>Misel Marquez</td>
                                    <td>12345678</td>
                                    <td>email@hotmail.com</td>
                                    <td>01 Noviembre 2024</td>
                                    <!--<td><a class="btn btn-sm btn-primary" href="">Detail</a></td> -->
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12345678</td>
                                    <td>Misel Marquez</td>
                                    <td>12345678</td>
                                    <td>email@hotmail.com</td>
                                    <td>01 Noviembre 2024</td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12345678</td>
                                    <td>Misel Marquez</td>
                                    <td>12345678</td>
                                    <td>email@hotmail.com</td>
                                    <td>01 Noviembre 2024</td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12345678</td>
                                    <td>Misel Marquez</td>
                                    <td>12345678</td>
                                    <td>email@hotmail.com</td>
                                    <td>01 Noviembre 2024</td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12345678</td>
                                    <td>Misel Marquez</td>
                                    <td>12345678</td>
                                    <td>email@hotmail.com</td>
                                    <td>01 Noviembre 2024</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calendario</h6>
                                
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Consultorio Médico Thomas Goletz</a>, Todos los Derechos Reservados. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                           
                            Desarrollado por <a href="#">Misael Marquez</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>