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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Editar Paciente</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.patients.update', $patient->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Número de Documento -->
                        <div class="mb-3">
                            <label for="document_number" class="form-label">Número de Documento</label>
                            <input type="text" 
                                   class="form-control @error('document_number') is-invalid @enderror" 
                                   id="document_number" 
                                   name="document_number" 
                                   value="{{ old('document_number', $patient->document_number) }}" 
                                   required>
                            @error('document_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Primer Nombre -->
                        <div class="mb-3">
                            <label for="first_name" class="form-label">Primer Nombre</label>
                            <input type="text" 
                                   class="form-control @error('first_name') is-invalid @enderror" 
                                   id="first_name" 
                                   name="first_name" 
                                   value="{{ old('first_name', $patient->first_name) }}" 
                                   required>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Segundo Nombre -->
                        <div class="mb-3">
                            <label for="second_name" class="form-label">Segundo Nombre</label>
                            <input type="text" 
                                   class="form-control @error('second_name') is-invalid @enderror" 
                                   id="second_name" 
                                   name="second_name" 
                                   value="{{ old('second_name', $patient->second_name) }}">
                            @error('second_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Primer Apellido -->
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Primer Apellido</label>
                            <input type="text" 
                                   class="form-control @error('last_name') is-invalid @enderror" 
                                   id="last_name" 
                                   name="last_name" 
                                   value="{{ old('last_name', $patient->last_name) }}" 
                                   required>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Segundo Apellido -->
                        <div class="mb-3">
                            <label for="second_surname" class="form-label">Segundo Apellido</label>
                            <input type="text" 
                                   class="form-control @error('second_surname') is-invalid @enderror" 
                                   id="second_surname" 
                                   name="second_surname" 
                                   value="{{ old('second_surname', $patient->second_surname) }}">
                            @error('second_surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Género -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">Género</label>
                            <select class="form-control @error('gender') is-invalid @enderror" 
                                    id="gender" 
                                    name="gender" 
                                    required>
                                <option value="">Seleccione un género</option>
                                <option value="male" {{ old('gender', $patient->gender) == 'male' ? 'selected' : '' }}>Masculino</option>
                                <option value="female" {{ old('gender', $patient->gender) == 'female' ? 'selected' : '' }}>Femenino</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Fecha de Nacimiento -->
                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" 
                                   class="form-control @error('date_of_birth') is-invalid @enderror" 
                                   id="date_of_birth" 
                                   name="date_of_birth" 
                                   value="{{ old('date_of_birth', $patient->date_of_birth) }}" 
                                   required>
                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email', $patient->email) }}" 
                                   required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="text" 
                                   class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" 
                                   name="phone" 
                                   value="{{ old('phone', $patient->phone) }}" 
                                   required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Estado Civil -->
                        <div class="mb-3">
                            <label for="state_civil" class="form-label">Estado Civil</label>
                            <input type="text" class="form-control" id="state_civil"
                                                name="state_civil" value="{{ old('state_civil') }}"
                                                placeholder="Ingrese el estado">
                            {{-- <select class="form-control @error('state_civil') is-invalid @enderror" 
                                    id="state_civil" 
                                    name="state_civil">
                                <option value="">Seleccione un estado civil</option>
                                <option value="single" {{ old('state_civil', $patient->state_civil) == 'single' ? 'selected' : '' }}>Soltero/a</option>
                                <option value="married" {{ old('state_civil', $patient->state_civil) == 'married' ? 'selected' : '' }}>Casado/a</option>
                            </select> --}}
                            @error('state_civil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Contacto de Emergencia -->
                        <div class="mb-3">
                            <label for="emergency_contact" class="form-label">Contacto de Emergencia</label>
                            <input type="text" 
                                   class="form-control @error('emergency_contact') is-invalid @enderror" 
                                   id="emergency_contact" 
                                   name="emergency_contact" 
                                   value="{{ old('emergency_contact', $patient->emergency_contact) }}">
                            @error('emergency_contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Grupo Sanguíneo -->
                        <div class="mb-3">
                            <label for="blood_group" class="form-label">Grupo Sanguíneo</label>
                            <input type="text" 
                                   class="form-control @error('blood_group') is-invalid @enderror" 
                                   id="blood_group" 
                                   name="blood_group" 
                                   value="{{ old('blood_group', $patient->blood_group) }}">
                            @error('blood_group')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Notas Adicionales -->
                        <div class="mb-3">
                            <label for="additional_notes" class="form-label">Notas Adicionales</label>
                            <textarea 
                                   class="form-control @error('additional_notes') is-invalid @enderror" 
                                   id="additional_notes" 
                                   name="additional_notes">{{ old('additional_notes', $patient->additional_notes) }}</textarea>
                            @error('additional_notes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
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
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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
