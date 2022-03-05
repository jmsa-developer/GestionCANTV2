<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Academia Creativa</title>
    <link href="js/bootstrap/dist/css/bootstrap-journal.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="css/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="js/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="js/select2/dist/css/select2.min.css">
    <link href="js/datatables/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="js/select2/dist/js/select2.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <!--wrapper start-->
    <div class="wrapper">
        <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <a href="?pagina=inicio" class="title">Academia <span>Creativa</span></a>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="mb-0">
                    <li class="nav-item dropdown">
                        <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= empty($_SESSION['ac_usuario']) ? 'Usuario' : $_SESSION['ac_usuario'] ?></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                            <a href="?pagina=perfil" class="dropdown-item text-light">Perfil</a>
                            <a href="?pagina=logout" id="logout" class="dropdown-item text-light">Salir</a>
                        </div>
                    </li>
                    <!-- <li><a href="?pagina=logout"><i class="fas fa-power-off"></i></a></li> -->
                </ul>
            </div>
        </div>
        <!--header menu end-->
        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="img/logo.png">
                    <!-- <p>Administrador</p> -->
                </center>
                <li class="item">
                    <a href="?pagina=inicio" class="menu-btn">
                        <i class="fas fa-home"></i><span>Inicio</span>
                    </a>
                </li>


                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-check"></i><span>Servicios Estéticos<i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <?php
                        if ($_SESSION['ac_rol'] == 'Administrador') {
                        ?>
                            <a href="?pagina=registro_servicio"><i class="far fa-newspaper"></i><span>Nuevo Servicio Estético</span></a>
                        <?php
                        }
                        ?>
                        <a href="?pagina=ver_serviciosesteticos"><i class="far fa-calendar-check"></i><span>Consultas Servicio Estético</span></a>
                        <a href="?pagina=registro_cita"><i class="far fa-newspaper"></i><span>Nueva Cita</span></a>
                        <a href="?pagina=ver_citas"><i class="far fa-calendar-check"></i><span>Consultas Citas</span></a>
                        <a href="?pagina=registro_cliente"><i class="fas fa-user-plus"></i><span>Nuevo Cliente</span></a>
                        <a href="?pagina=ver_clientes"><i class="far fa-file-alt"></i><span>Consultas Cliente</span></a>
                        <a href="?pagina=registro_pagocita"><i class="far fa-money-bill-alt"></i><span>Nuevo Pago de Cita</span></a>
                        <a href="?pagina=ver_pagoscitas"><i class="far fa-calendar-check"></i><span>Consultas Pagos de Citas</span></a>

                    </div>
                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-book"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <?php
                        if ($_SESSION['ac_rol'] == 'Administrador') {
                        ?>
                            <a href="?pagina=registro_curso"><i class="fas fa-book-open"></i><span>Nuevo cursos</span></a>
                        <?php
                        }
                        ?>
                        <a href="?pagina=ver_cursos"><i class="fas fa-book-reader"></i><span>Consultas Cursos</span></a>
                        <a href="?pagina=registro_participante"><i class="fas fa-user-plus"></i><span>Nuevo Participante</span></a>
                        <a href="?pagina=ver_participantes"><i class="far fa-file-alt"></i><span>Consultas Participante</span></a>
                        <a href="?pagina=registro_pagocurso"><i class="far fa-money-bill-alt"></i><span>Nuevo Pago de Curso</span></a>
                        <a href="?pagina=ver_pagoscursos"><i class="far fa-calendar-check"></i><span>Consultas Pagos de Cursos</span></a>

                    </div>
                </li>
                <?php
                if ($_SESSION['ac_rol'] == 'Administrador') {
                ?>
                    <li class="item" id="personal">
                        <a href="#personal" class="menu-btn">
                            <i class="fas fa-address-card"></i><span>Empleados <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="?pagina=registro_empleado"><i class="fas fa-user-plus"></i><span>Nuevo Empleado</span></a>
                            <a href="?pagina=ver_empleados"><i class="fas fa-copy"></i><span>Consultas Empleados</span></a>
                        </div>
                    </li>
                    <li class="item" id="usuario">
                        <a href="#usuario" class="menu-btn">
                            <i class="fas fa-user-lock"></i><span>Usuario <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="?pagina=registro_usuario"><i class="fas fa-user-plus"></i><span>Nuevo usuario</span></a>
                            <a href="?pagina=ver_usuarios"><i class="fas fa-copy"></i><span>Consultas Usuario</span></a>
                        </div>
                    </li>
                <?php
                }
                ?>
                <li class="item">
                    <a href="?pagina=reportes" class="menu-btn">
                        <i class="fas fa-poll-h"></i><span>Reportes</span>
                    </a>
                </li>
                <li class="item">
                    <a href="?pagina=inicio" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>Ayuda</span>
                    </a>
                </li>
            </div>
        </div>
        <!--sidebar end-->