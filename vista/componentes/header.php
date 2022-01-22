<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Academia Creativa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <!--wrapper start-->
    <div class="wrapper">
        <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <div class="title">Academia <span>Creativa</span></div>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>

                    <li><a href="?pagina=login"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
        <!--header menu end-->
        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="img/logo.png">
                    <p>Administrador</p>
                </center>
                <li class="item">
                    <a href="?pagina=administrador" class="menu-btn">
                        <i class="fas fa-home"></i><span>Inicio</span>
                    </a>
                </li>


                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-check"></i><span>Servicios Estéticos<i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="?pagina=registro_servicio"><i class="far fa-newspaper"></i><span>Nuevo Servicio Estético</span></a>
                        <a href="?pagina=ver_serviciosesteticos"><i class="far fa-calendar-check"></i><span>Consultas Servicio Estético</span></a>
                        <a href="?pagina=registro_cita"><i class="far fa-newspaper"></i><span>Nueva Cita</span></a>
                        <a href="?pagina=ver_citas"><i class="far fa-calendar-check"></i><span>Consultas Citas</span></a>
                        <a href="?pagina=registro_clientes"><i class="fas fa-user-plus"></i><span>Nuevo Cliente</span></a>
                        <a href="?pagina=ver_cliente"><i class="far fa-file-alt"></i><span>Consultas Cliente</span></a>
                        <a href="?pagina=ver_pagoscitas"><i class="far fa-money-bill-alt"></i><span>Consultas Pago</span></a>

                    </div>
                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-book"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="?pagina=registro_curso"><i class="fas fa-book-open"></i><span>Nuevo cursos</span></a>
                        <a href="?pagina=ver_cursos"><i class="fas fa-book-reader"></i><span>Consultas Cursos</span></a>
                        <a href="?pagina=registro_estudiante"><i class="fas fa-user-plus"></i><span>Nuevo Participante</span></a>
                        <a href="?pagina=ver_estudiantes"><i class="far fa-file-alt"></i><span>Consultas Participante</span></a>
                        <a href="?pagina=ver_pagoscursos"><i class="far fa-money-bill-alt"></i><span>Consultas Pago</span></a>

                    </div>
                </li>
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
                <li class="item">
                    <a href="?pagina=usuario" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>Ayuda</span>
                    </a>
                </li>
            </div>
        </div>
        <!--sidebar end-->