<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Academia Creativa</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
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
                        <p>Usuario</p>
                    </center>
                    <li class="item">
                        <a href="?pagina=usuario" class="menu-btn">
                            <i class="fas fa-home"></i><span>Inicio</span>
                        </a>
                    </li>


                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-check"></i><span>Servicios Estéticos<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="?pagina=registro_serviciousuario"><i class="far fa-newspaper"></i><span>Nuevo Servicio Estético</span></a>
                            <a href="?pagina=ver_serviciosesteticosusuario"><i class="far fa-calendar-check"></i><span>Consultas Servicio Estético</span></a>
                            <a href="?pagina=registro_citausuario"><i class="far fa-newspaper"></i><span>Nueva Cita</span></a>
                            <a href="?pagina=ver_citasusuario"><i class="far fa-calendar-check"></i><span>Consultas Citas</span></a>
                            <a href="?pagina=registro_clientesusuario"><i class="fas fa-user-plus"></i><span>Nuevo Cliente</span></a>
                            <a href="?pagina=ver_clienteusuario"><i class="far fa-file-alt"></i><span>Consultas Cliente</span></a>
                            <a href="?pagina=ver_pagoscitasusuario"><i class="far fa-money-bill-alt"></i><span>Consultas Pago</span></a>

                        </div>
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                            <i class="fas fa-book"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="?pagina=registro_cursousuario"><i class="fas fa-book-open"></i><span>Nuevo cursos</span></a>
                            <a href="?pagina=ver_cursosusuario"><i class="fas fa-book-reader"></i><span>Consultas Cursos</span></a>
                            <a href="?pagina=registro_estudianteusuario"><i class="fas fa-user-plus"></i><span>Nuevo Participante</span></a>
                            <a href="?pagina=ver_estudiantesusuario"><i class="far fa-file-alt"></i><span>Consultas Participante</span></a>
                            <a href="?pagina=ver_pagoscursosusuario"><i class="far fa-money-bill-alt"></i><span>Consultas Pago</span></a>
                        </div>
                    </li>      

                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>Ayuda</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <br>
            <!--main container start-->
            <div class="main-container">
                <div class="card">
                    <p><h2>Funciones de la Empresa: </h2><br>Brindamos cursos y servicios estéticos de belleza en general.</p>
                </div>
                
                <div class="card">
                    <p><h2>Expectativas de la Empresa: </h2>
                        <br><b>Corto Plazo:</b> Trabajar con mi familia que también está en la rama de profesional de la belleza.<br>
                        <br><b>Mediano Plazo: </b> Contratar profesionales que no sean de mi núcleo familiar.<br>
                        <br><b>Largo Plazo: </b> Establecer un par de instituciones dentro y fuera del país. </p>
                </div>
                
                <div class="card">
                    <p><h2>Cursos Dictados:</h2><br>
                        <b>Cursos de belleza</b><br><br>
                        Cejas, pestañas y Depilación.<br>
                        Maquillaje básico, intermedio y profesional. <br>
                        Automaquillaje. <br>
                        Lifting de Pestañas. <br>
                        Laminado de Pestañas. <br>
                        Higiene Facial Profunda. <br>
                        Micropigmentación. <br>
                        BBGLOW. <br>
                        Extensiones de pestañas. <br>
                        Uñas. <br>
                        Peluquería. <br>
                        Barbería. 
                        </p>
                </div>
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->


    <script src="js/administrador.js"></script>

<!--footer-->
<center>
<footer class="footer">
  <div class="b-footer">
    <p>Todos los derechos reservados por<br> ©Academia Creativa</p>
  </div>
</footer>
</center>

</body>
</html>
      