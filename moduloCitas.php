<?php

	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location:LoginPaciente.php");
	}

	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="css/mCitas.css">
  <title>Sistema Integral de Salud</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;500&display=swap" rel="stylesheet">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">


  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="#" rel="stylesheet">
</head>


<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

    <symbol id="home" viewBox="0 0 16 16">
      <path
        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path
        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd"
        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path
        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd"
        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path
        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
  </svg>

  <main>
    <header class="p-3 mb-3 border-bottom" style="background-color: #014770;">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap" />
            </svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <img src="img/sis.jpg" alt="" style="width: 150px;">
            <li style="font-size: 20px"><a href="#" class="nav-link px-2 link-dark">Inicio</a></li>
            <li style="font-size: 20px"><a href="#" class="nav-link px-2 link-secondary">Citas</a></li>
            <li style="font-size: 20px"><a href="#" class="nav-link px-2 link-dark">Medicos</a></li>
            <li style="font-size: 20px"><a href="#" class="nav-link px-2 link-dark">Mis Resultados</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
              data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Ajustes</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logoutPaciente">Cerrar Sesion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
<!--
    <div class="container mt-5">
      <div class="col-12">
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">Pide tu cita</h4>

                <form id="form2" name="form2">
                  <div class="col-12 row">
                    <div class="col-11">
                      <input type="date" class="form-control">
                      <label class="form-label">Nombre a buscar</label>
                      <input type="text" class="form-control" id="buscar" name="buscar" value="" >
                    </div>
                    <div class="col-1">
                      <input type="submit" class="btn btn-success" value="Ver" style="margin-top: 30px;">
                    </div>
                  </div>
                  <p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i>
                  </p>
                </form>


                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr style="background-color: #00695c; color:#FFFFFF;">
                        <th style=" text-align: center;"> Nombre </th>
                        <th style=" text-align: center;"> Departamento </th>
                        <th style=" text-align: center;"> Color </th>
                        <th style=" text-align: center;"> Fecha </th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td style="text-align: center;">
                        nombre
                        </td>
                        <td style="text-align: center;">
                          departamento
                        </td>
                        <td style="text-align: center;">
                          color
                        </td>
                        <td style=" text-align: center;">
                          fechas
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  -->

  <div class="content">
            <div class="tituloBar">
                PIDE TU CITA            
            </div>
  </div>
  <hr>
    <div class="contenedor_general">
    <div class="bar-components bar-calendar">
        <div class="content">
            <div class="tituloBar">
                <input type="date" id="CalendarCita">
            </div>
            <div class="menuIconCitas">
                <div class="selectSearch p-0">
                    <div>
                        <select name="especialidad_select_search" id="especialidad_select_search" class="especialidad-select-js">
                            <option value="">Especialidad</option>
                            <option value="1">Alergia e Inmunología</option>
                            <option value="2">Anestesiología</option>
                            <option value="166">Atenciones COVID Adulto</option>
                            <option value="167">Atenciones COVID Pediatria</option>
                            <option value="3">Cardiología</option>
                            <option value="68">Cardiología Pediatrica</option>
                            <option value="71">Cirugía de Cabeza, Cuello y Máxilo Facial</option>
                            <option value="4">Cirugía General</option>
                            <option value="141">Cirugía Maxilofacial</option>
                            <option value="130">Cirugía Oncológica</option>
                            <option value="5">Dermatología</option>
                            <option value="142">Ecografia</option>
                            <option value="143">Ecografia Obstetrica</option>
                            <option value="6">Emergencia</option>
                            <option value="7">Endocrinología</option>
                            <option value="127">Fisioterapia</option>
                            <option value="9">Geriatría</option>
                            <option value="124">Medicina General</option>
                            <option value="20">Neumología</option>
                            <option value="23">Nutrición</option>
                            <option value="24">Odontología</option>
                            <option value="25">Oftalmología</option>
                            <option value="30">Pediatría</option>
                            <option value="33">Radiología</option>
                            <option value="35">Traumatología</option>
                            <option value="36">rología</option>
                            </select>
                    </div>
                    <div>
                        <select name="lugar_select_search" id="lugar_select_search" class="lugar-cita-js">
                            <option value="">Centros de Salud</option>
                            <option value="16">Hospital 28 de Julio</option>
                            <option value="10">Hospital Rebagliateri</option>
                            <option value="22">Centro de Salud Perez Liendro</option>
                            <option value="6">Centro de Salud 1</option>
                            <option value="13">Centro de Salud 2</option>
                            <option value="14">Centro de Salud 3</option>
                            <option value="2">Centro de Salud 4</option>
                            <option value="8">Policlinico de San Borja</option>
                            <option value="15">SANNA Sánchez Ferrer - Trujillo</option>
                            <option value="4">Hospital 2 de Mayo</option>
                        </select>
                    </div>
                </div>
            </div>
       </div>
    </div>
  </div>
<hr>
<div class="resultados">
            <div class="cardCitas">
              <div class="foto">
                <img src="img/foto1.png" alt="" class="fotoD">
              </div>
            <div class="CardInlineDoctor">
                <p class="cardDoctor azul">GARCIA RAMIREZ, RAUL ALBERTO</p>
                <p class="especialidad">Medicina General</p>
                <p class="direccion">Hospital 28 de Julio</p>
            </div>
            
            <div class="CardInlineHorario">
                <div class="contHorarios">
                                                                        
                                <form action="ConfirmacionCita.php" method="POST">
                                    <input type="hidden" name="_token" value="">      
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0; font-family: 'Nunito', sans-serif;"><p class="confirmAppointStep2">15:40</p></button>
                                        <input type="hidden" name="hora" value="15:40">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1249612|5">
                                        <input type="hidden" name="turno" value="2">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="#" method="POST">
                                    <input type="hidden" name="_token" value="">    
                                         <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">16:20</p></button>
                                        <input type="hidden" name="hora" value="16:20">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1249612|5">
                                        <input type="hidden" name="turno" value="3">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="" method="POST">
                                    <input type="hidden" name="_token" value="">                                    
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">17:00</p></button>
                                        <input type="hidden" name="hora" value="17:00">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1247054|5">
                                        <input type="hidden" name="turno" value="1">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="h" method="POST">
                                    <input type="hidden" name="_token" value="">     
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">17:40</p></button>
                                        <input type="hidden" name="hora" value="17:40">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1247054|5">
                                        <input type="hidden" name="turno" value="3">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                      </div>
            </div>
  </div>
            <div class="cardCitas">
              <div class="foto">
                <img src="img/foto1.png" alt="" class="fotoD">
              </div>
            <div class="CardInlineDoctor">
                <p class="cardDoctor azul">GARCIA RAMIREZ, RAUL ALBERTO</p>
                <p class="especialidad">Medicina General</p>
                <p class="direccion">Hospital 28 de Julio</p>
            </div>
            
            <div class="CardInlineHorario">
                <div class="contHorarios">
                                                                        
                                <form action="#" method="POST">
                                    <input type="hidden" name="_token" value="">      
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0; font-family: 'Nunito', sans-serif;"><p class="confirmAppointStep2">15:40</p></button>
                                        <input type="hidden" name="hora" value="15:40">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1249612|5">
                                        <input type="hidden" name="turno" value="2">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="#" method="POST">
                                    <input type="hidden" name="_token" value="">    
                                         <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">16:20</p></button>
                                        <input type="hidden" name="hora" value="16:20">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1249612|5">
                                        <input type="hidden" name="turno" value="3">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="" method="POST">
                                    <input type="hidden" name="_token" value="">                                    
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">17:00</p></button>
                                        <input type="hidden" name="hora" value="17:00">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1247054|5">
                                        <input type="hidden" name="turno" value="1">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="h" method="POST">
                                    <input type="hidden" name="_token" value="">     
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">17:40</p></button>
                                        <input type="hidden" name="hora" value="17:40">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1247054|5">
                                        <input type="hidden" name="turno" value="3">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                      </div>
            </div>
        </div>
        <div class="cardCitas">
              <div class="foto">
                <img src="img/foto1.png" alt="" class="fotoD">
              </div>
            <div class="CardInlineDoctor">
                <p class="cardDoctor azul">GARCIA RAMIREZ, RAUL ALBERTO</p>
                <p class="especialidad">Medicina General</p>
                <p class="direccion">Hospital 28 de Julio</p>
            </div>
            
            <div class="CardInlineHorario">
                <div class="contHorarios">
                                                                        
                                <form action="#" method="POST">
                                    <input type="hidden" name="_token" value="">      
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0; font-family: 'Nunito', sans-serif;"><p class="confirmAppointStep2">15:40</p></button>
                                        <input type="hidden" name="hora" value="15:40">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1249612|5">
                                        <input type="hidden" name="turno" value="2">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="#" method="POST">
                                    <input type="hidden" name="_token" value="">    
                                         <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">16:20</p></button>
                                        <input type="hidden" name="hora" value="16:20">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1249612|5">
                                        <input type="hidden" name="turno" value="3">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="" method="POST">
                                    <input type="hidden" name="_token" value="">                                    
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">17:00</p></button>
                                        <input type="hidden" name="hora" value="17:00">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1247054|5">
                                        <input type="hidden" name="turno" value="1">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                            
                                <form action="h" method="POST">
                                    <input type="hidden" name="_token" value="">     
                                        <div class="horario">
                                        <button style="background: transparent;border: none;font-size:0;"><p class="confirmAppointStep2">17:40</p></button>
                                        <input type="hidden" name="hora" value="17:40">
                                        <input type="hidden" name="cmp" value="54708">
                                        <input type="hidden" name="horarioDetalle" value="1247054|5">
                                        <input type="hidden" name="turno" value="3">
                                        <input type="hidden" name="especialidad" value="Medicina General">
                                        <input type="hidden" name="nombre" value="GARCIA RAMIREZ, RAUL ALBERTO">
                                        <input type="hidden" name="clinica" value="Hospital 28 de Julio">
                                        <input type="hidden" class="fecha-cita" name="fecha" value="24/6/2022">
                                        <input type="hidden" class="idEspecialidad-js" name="idEspecialidad" id="idEspecialidad" value="124">
                                        <input type="hidden" class="idClinica-js" name="idClinica" id="idClinica" value="22">
                                    </div>
                                </form>
                      </div>
            </div>
        </div>

  </main>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>