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
            <center><h2>Registro de Empleado</h2></center>
        </div>
        <br>

        <form action="" class="formulario" id="formulario">

            <div class="formulario__grupo" id="grupo__cedula">
                <label for="cedula" class="formulario__label">Cédula</label>
                <div class="formulario__grupo-input">
                     <input type="tel" name="cedula" class="formulario__input" id="cedula" placeholder="28516382" pattern="[0-9]{8}">
                </div>
                <p class="formulario__input-error">La Cédula tiene que ser de 4 a 10 dígitos y solo puede contener numeros.</p>
            </div>
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Luz Raquel" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div>

            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellido</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Fernández García" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El apellido tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div> 
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="formulario__label">Teléfono</label>
                <div class="formulario__grupo-input">
                     <input type="tel" name="telefono" class="formulario__input" id="telefono" placeholder="04245127665" pattern="[0-9]{11}">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Número de teléfono solo puede contener numeros y tiene que ser de 4 a 10 dígitos.</p>
            </div>

            <!-- Grupo: cédula -->
          
             <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="formulario__label">Correo eléctronico</label>
                <div class="formulario__grupo-input">
                     <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Jose@gmail.com"multiple required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El correo solo puede contener letras, números y caracteres especiales.</p>
            </div>

            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__direccion">
                <label for="direccion" class="formulario__label">Dirección</label>
                <div class="formulario__grupo-input">
                  <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Urbanizacion Rafael Caldera" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La dirección tiene que ser de 2 a 30 dígitos y solo puede contener letras y números.</p>
            </div> 
            <!-- Grupo: Día de Visita-->
            <div class="formulario__grupo" id="grupo__fechanac">
                <label for="fechanac" class="formulario__label">Fecha de nacimiento</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fechanac" id="fechanac" placeholder="01/09/2021" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Fecha de nacimiento solo puede contener numeros.</p>
            </div>
            <div class="formulario__grupo" id="grupo__fechacon">
                <label for="fechacon" class="formulario__label">Fecha de inicio de contrato</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fechacon" id="fechacon" placeholder="01/09/2021" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Fecha de inicio de contrato solo puede contener numeros.</p>
            </div>
            <div class="formulario__grupo" id="grupo__horario">
                <label for="horario" class="formulario__label">Horario del Turno</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="horario" id="horario" placeholder="Mañana" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Horario del Turno tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div>
 <div class="formulario__grupo" id="grupo__rol">
                <label for="rol" class="formulario__label">Rol que cumple en la Empresa</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="rol" id="rol" placeholder="" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El rol tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div>

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
    </main>
        </div>
        <!--wrapper end-->


    <script src="js/administrador.js"></script>
    <script src="js/empleado.js"></script>
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
      