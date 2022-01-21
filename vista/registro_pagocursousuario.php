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
    <main>

        <div class="nombre">
            <center><h2>Registro de Pago Curso</h2></center>
        </div>
        <br>

        <form action="" class="formulario" id="formulario">

        <div class="formulario__grupo" id="grupo__idpago">
                <label for="idpago" class="formulario__label">Id Pago</label>
                <div class="formulario__grupo-input">    
                    <input type="number" name="idpago" class="formulario__input" id="idpago" placeholder="Id del pago" value="" min="1" max="1000" step="1" required="" />

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Id del Pago solo puede contener numeros y tiene que ser de 4 a 20 dígitos.</p>
            </div>
          
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__fecha">
                <label for="fecha" class="formulario__label">Fecha del pago</label>
                <div class="formulario__grupo-input">
                     <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Fecha del pago tiene que ser de 2 a 16 dígitos y solo puede contener números.</p>
            </div>

<!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__hora">
                <label for="hora" class="formulario__label">Hora del pago</label>
                <div class="formulario__grupo-input">
                    <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="16:30:00" value="08:30:00" required="">

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Hora del pago tiene que ser de 4 a 10 dígitos y solo puede contener numeros y letras.</p>
            </div>



            <div class="formulario__grupo" id="grupo__tipo">
                <label for="tipo" class="formulario__label">Tipo de pago</label>
                <div class="formulario__grupo-input">    
               
                      <label><input type="checkbox"class="formulario__label" name="arte">Divisas</label><br>

                     <label><input type="checkbox"class="formulario__label" name="television">Bolivares Efectivo</label><br>

                      <label><input type="checkbox"class="formulario__label" name="arte">Debito</label><br>

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                



                </div>
                <p class="formulario__input-error">El Tipo de pago  solo puede contener letras y tiene que ser de 4 a 30 dígitos.</p>
            </div>
   <!-- Grupo: cédula -->



             <div class="formulario__grupo" id="grupo__comprobante">
              <label for="comprobante" class="formulario__label">Nro del comprobante</label>

                <div class="formulario__grupo-input">
                        <input type="number" name="comprobante" class="formulario__input" id="comprobante" placeholder="Nro del comprobante" value="" min="1" max="1000" step="1" required="" />

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Nro del comprobante tiene que ser de 2 a 20 dígitos y solo puede contener números.</p>
            </div>




             <div class="formulario__grupo" id="grupo__total">
              <label for="total" class="formulario__label">Pago Total del Curso</label>

                <div class="formulario__grupo-input">
                     <input type="number" name="total" class="formulario__input" id="total" placeholder="Pago total del curso" value="" min="1" max="1000" step="1" required="" />

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Pago Total del Curso tiene que ser de 2 a 20 dígitos y solo puede contener números.</p>
            </div>

            <div class="formulario__grupo" id="grupo__abono">
                <label for="abono" class="formulario__label">Abono</label>
                <div class="formulario__grupo-input">
                    <input type="number" class="formulario__input" name="abono" id="abono" placeholder="10 $">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El abono tiene que ser de 4 a 10 dígitos y solo puede contener numeros y caracteres especiales.</p>
            </div> 

            <div class="formulario__grupo" id="grupo__descripcion">
                <label for="descripcion" class="formulario__label">Descripcion</label>
                <div class="formulario__grupo-input">
                    <textarea name="descripcion" class="formulario__input" id="descripcion"  placeholder="Colocar la descripcion de como fue el pago" required="" ></textarea>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Descripcion solo puede contener letras.</p>
            </div>

         

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>



        </form>
<br>
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>           

                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
<br>
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Imprimir</button>           

                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
<br><br>

<button type="submit" class="formulario__btn" style="float: left;"><i class="fas fa-arrow-left"></i><a href="?pagina=registro_estudiantecursousuario">Atrás</a> </button>

<br><br>
    </main>
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
      