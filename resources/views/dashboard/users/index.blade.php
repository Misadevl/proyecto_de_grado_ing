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
                        <a href="{{ route('admin.patients.index') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Pacientes</a>
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
                    <div class="col-12">

                        <div class="bg-light rounded h-100 p-4">
                            
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="mb-0">Lista de Usuarios</h3>
                                <a href="{{ route('admin.users.create') }}" class="btn btn-info rounded-pill">Agregar Nuevo Usuario</a>
                            </div>
                            <div class="table-responsive">


                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th>Nombres y Apellidos</th>
                                            <th>Email</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }} {{ $user->second_name }} {{ $user->last_name }} {{ $user->second_surname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.users.edit', $user) }}"
                                                        class="btn btn-square btn-outline-warning"><i
                                                            class="bi bi-pencil-fill"></i></a>
                                                    <form action="{{ route('admin.users.destroy', $user) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-square btn-outline-danger"
                                                            onclick="return confirm('Are you sure?')"><i
                                                                class="bi bi-x-circle-fill"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>


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
