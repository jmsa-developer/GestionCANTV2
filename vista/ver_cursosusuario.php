<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Academia Creativa</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                <div class="row pb-2">
                    <div class="col">
                <form action=" " method="POST">
                     <input type="search" class="form-control" name="buscar" placeholder="Buscar en Cursos...">
            </div>

                    <div class="col">
                        <button type="submit" class="btn btn-secondary w-100" name="btn-buscar">Buscar</button>
                </form>
                    </div>
            </div>
                </div>
                <div class="card">
                    <div class="row">
                        <h1 class="display-8 text-center p-2 text-white bg-secondary">Tabla de Cursos</h1>
                    </div>

                <table class="table table-inverse">
                        <thead>
                            <tr>
                                <th>ID Curso</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Duracion</th>
                                <th>Costo</th>
                                <th>ID Empleado(s)</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>




                </table>
                </div>
                
            </div>
            <!--main container end-->



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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>