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
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>Ayuda</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <br>
            <!--main container start-->
    <main>

        <div class="nombre">
            <center><h2>Registro de Servicio Estético</h2></center>
        </div>
        <br>

        <form action="" class="formulario" id="formulario">

        <div class="formulario__grupo" id="grupo__idservicio">
                <label for="idservicio" class="formulario__label">Id Servicio Estético</label>
                <div class="formulario__grupo-input">    
                    <input type="number" name="idservicio" class="formulario__input" id="idservicio" placeholder="id servicio estético" value="" min="1" max="1000" step="1" required="" />

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Número de socio solo puede contener numeros y tiene que ser de 4 a 10 dígitos.</p>
            </div>          
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre del Servicio Estético</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del Servicio Estético">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre del Servicio Estético tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div>

            <div class="formulario__grupo" id="grupo__costo">
                <label for="costo" class="formulario__label">Costo del Servicio Estético</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="costo" id="costo" placeholder="10 $">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El costo del Servicio Estético solo puede contener numeros y caracteres especiales, tiene que ser de 1 a 10 dígitos.</p>
            </div>

            <div class="formulario__grupo" id="grupo__tipo">
                <label for="tipo" class="formulario__label">Tipo de servicio</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="tipo" id="tipo" placeholder="Tipo de servicio Estético">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Tipo de servicio tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div>

            <div class="formulario__grupo" id="grupo__descripcion">
                <label for="descripcion" class="formulario__label">Descripcion del Servicio Estético</label>
                <div class="formulario__grupo-input">
                     <textarea name="descripcion" class="formulario__input" id="descripcion"  placeholder="Colocar la descripcion del Servicio Estético" required="" ></textarea>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Descripcion del curso solo puede contener letras.</p>
            </div>


            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>
<br><br>
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
    </main>

            <!--main container end-->
        </div>
        <!--wrapper end-->


    <script src="js/administrador.js"></script>
    <script src="js/servicio.js"></script>

<br><br><br><br><br>
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
      