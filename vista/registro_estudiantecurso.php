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
            <center><h2>Registro del Curso Participante</h2></center>
        </div>
        <br>

        <form action="" class="formulario" id="formulario">

            <div class="formulario__grupo" id="grupo__curso">
                <label for="curso" class="formulario__label">Seleccione un curso</label>
                    <div class="formulario__grupo-input">
                            <select name="combo" >
                                <!-- Opciones de la lista -->
                                <option value="0"></option>
                                <option value="1">Cejas, pestañas y Depilación.</option>
                                <option value="2">Automaquillaje</option> 
                                <option value="3">Lifting de Pestañas</option>
                                <option value="4">Laminado de Pestañas</option>
                                <option value="5">Higiene Facial Profunda</option> 
                                <option value="6">Micropigmentación</option>
                            </select>
                    </div>
            </div>

            <div class="formulario__grupo" id="grupo__fecha">
                <label for="fecha" class="formulario__label">Fecha del Curso</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La fecha del Curso solo puede contener numeros.</p>
            </div>

            <div class="formulario__grupo" id="grupo__duracion">
                <label for="duracion" class="formulario__label">Duración del Curso</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="duracion" id="duracion" placeholder="3 días">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La duración del Curso tiene que ser de 1 a 10 dígitos y solo puede contener letras y números.</p>
            </div> 

            <div class="formulario__grupo" id="grupo__horario">
                <label for="horario" class="formulario__label">Horario del curso</label>
                <div class="formulario__grupo-input">
                    <input type="time" class="formulario__input" name="horario" id="horario" placeholder="09:00 am">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El horario del curso tiene que ser de 2 a 16 dígitos y solo puede contener letras, nuemros signos de puntuación.</p>
            </div>  

            <div class="formulario__grupo" id="grupo__visita">
                <label for="apellido" class="formulario__label">Seleccione un Instructor</label>
                    <div class="formulario__grupo-input">
                            <select name="combo" >
                                <!-- Opciones de la lista -->
                                <option value="1">Nelbis García.</option>
                                <option value="2">Maria Alvarado</option> 
                                <option value="3">Luisa Gonzales</option>
                                <option value="4">Antonieta del Valle</option>
                                <option value="5">Ruth Martinez</option> 
                                <option value="6">Ana Melendez</option>
                            </select>
                    </div>
            </div>

            <div class="formulario__grupo" id="grupo__costo">
                <label for="costo" class="formulario__label">Costo del Curso</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="costo" id="costo" placeholder="30$">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El costo del curso tiene que ser de 1 a 10 dígitos y solo puede contener numeros y caracteres especiales.</p>
            </div> 
            

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>
<br>
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>
                <br>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
<br>
<button type="submit" class="formulario__btn" style="float: left;"><i class="fas fa-arrow-left"></i><a href="?pagina=registro_estudiante">Atrás</a> </button>

<button type="submit" class="formulario__btn" style="float: right;"><a href="?pagina=registro_pagocurso">Siguiente </a> <i class="fas fa-arrow-right"></i></button>

<br><br>
    </main>
            <!--main container end-->
        </div>
        <!--wrapper end-->


    <script src="js/administrador.js"></script>
    <script src="js/estudiantecurso.js"></script>

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