<?php
	session_start();
	require "./models/MVC/Conexion.php";
	
	if(!isset($_SESSION['id'])){
		header("Location:loginAdmin.php");
	}
	$nombre = $_SESSION['nombre'];
	$id = $_SESSION['id'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	if($tipo_usuario == 0){
		$where = "";
	
	}else if($tipo_usuario == 2){
		$where = "WHERE id = $id";
	}
	$sql = "SELECT * FROM usuario $where";

	$resultado = $mysqli -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Integral de Salud</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #014671;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principalAdmin.php">
                <img src="img/logo.jpg" width="30%">
                <div class="sidebar-brand-text mx-3" style="text-align: left;">Sistema
                    <br>Integral
                    <br>de Salud
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="principalAdmin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Medicos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="buttons.html">Registrar medico</a>
                        <a class="collapse-item" href="cards.html">Listado de medicos</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pacientes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">Registrar paciente</a>
                        <a class="collapse-item" href="utilities-border.html">Listado de pacientes</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link" href="tabla.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabla</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                         <!-- Nav Item - Alerts -->
                         <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Centro de Alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">17/05/2022</div>
                                        <span class="font-weight-bold">Nuevo paciente registrado</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">17/05/2022</div>
                                        <span class="font-weight-bold">Nuevo paciente registrado</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">18/05/2022</div>
                                        <span class="font-weight-bold">Nuevo paciente registrado</span>
                                    </div>
                                </a>
                                
                                <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas la alertas</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?>
                                &nbsp
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                    <!-- REGISTRO MEDICO -->
                    <body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Registro de Pacientes</h1>
                            </div>
                            <div>
                                <h1 class="h4 text-gray-900 mb-4">Datos Personales</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Nombre Completo</label>
                                        <input type="text" class="form-control " id=""
                                            placeholder="Ingrese su nombre completo">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control " id="">
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Email</label>
                                        <input type="email" class="form-control " id=""
                                            placeholder="Ingrese su correo electronico">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Numero de celular</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Ingrese su numero de celular">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Genero</label>
                                        <select required class="form-control ">
                                            <option disabled selected">Seleccione su genero</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Residencia</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Ingrese su residencia">
                                    </div>
                                </div>
                                <div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>DNI</label>
                                        <input type="text" class="form-control " id=""
                                            placeholder="Ingrese su DNI">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>ID CMP</label>
                                        <input type="text" class="form-control r" id=""
                                            placeholder="Ingrese CMP">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Especialidad</label>
                                        <select required class="form-control ">
                                        <option disabled selected>Seleccione su Especialidad</option>
                                            <option>Cardiología</option>
                                            <option>Dermatología</option>
                                            <option>Gastroenterología</option>
                                            <option>Medicina General</option>
                                            <option>Ginecología y Obstetricia</option>
                                            <option>Hematología</option>
                                            <option>Medicina Física y Rehabilitación</option>
                                            <option>Neumología</option>
                                            <option>Nutrición</option>
                                            <option>Odontología</option>
                                            <option>Oftalmología</option>
                                            <option>Psicología</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary btn-user btn-block">
                                    Registrar
                                </a>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
            <!-- End of Main Content -->

            <!-- Footer -->
          <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;2022</span>
                    </div>
                </div>
            </footer>-->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro que quieres cerrar sesion?.</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logoutAdmin.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>