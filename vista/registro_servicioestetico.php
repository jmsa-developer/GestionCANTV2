<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de servicio estético</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">

        <!-- Grupo: Numero socio -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre de servicio estético</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre de servico estético">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Nombre del servicio estético solo puede contener letras y tiene que ser de 4 a 20 dígitos.</p>
        </div>

    </form>

    <div class="nombre">
        <center>
            <h3>Tipos de servicios</h3>
        </center>
    </div>
    <br><br>
    <hr>
    <form action="" class="formulario" id="formulario">



        <div class="formulario__grupo" id="grupo__visita">
            <label for="visita" class="formulario__label"></label>
            <div class="formulario__grupo-input">
                <label><input type="checkbox" class="formulario__label" name="arte">Cejas</label><br>

                <label><input type="checkbox" class="formulario__label" name="television"> Pestañas</label><br>

                <label><input type="checkbox" class="formulario__label" name="videojuegos"> Depilacion</label><br>

                <label><input type="checkbox" class="formulario__label" name="videojuegos"> Extensiones de Pestañas</label><br>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>

                <p class="formulario__input-error">.</p>

                <hr>
                <label for="visita" class="formulario__label"> Servicios de Maquillaje</label>

                <label><input type="checkbox" class="formulario__label" name="arte">Basico</label><br>

                <label><input type="checkbox" class="formulario__label" name="television">Intermedio</label><br>

                <label><input type="checkbox" class="formulario__label" name="videojuegos"> Profesional</label><br>

                <i class="formulario__validacion-estado fas fa-times-circle"></i>

                <p class="formulario__input-error">.</p>


                <hr>
                <label for="visita" class="formulario__label">Servicios Pestañas</label>

                <label><input type="checkbox" class="formulario__label" name="arte">Lifting de Pestañas</label><br>

                <label><input type="checkbox" class="formulario__label" name="television">Laminado de pestañas</label><br>

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">.</p>
            <hr>

            <label for="visita" class="formulario__label">Limpiezas Facial.</label>

            <label><input type="checkbox" class="formulario__label" name="arte">Higiene Facial Profunda</label><br>


            <i class="formulario__validacion-estado fas fa-times-circle"></i>

            <p class="formulario__input-error">.</p>

            <hr>



            <div class="formulario__grupo" id="grupo__visita">
                <label for="visita" class="formulario__label">Servicios Manicure</label>
                <br>
                <label><input type="radio" name="genero" value="masculino"> Basico </label>
                <br>
                <label><input type="radio" name="genero" value="femenino"> Semipermantente</label>


                <br>
                <hr>
                <label for="visita" class="formulario__label">Servicio de Sistemas</label>
                <br>
                <label><input type="radio" name="genero" value="masculino"> Resina </label>
                <br>
                <label><input type="radio" name="genero" value="femenino"> Acrilico</label>
                <br>
                <hr>
                <label for="visita" class="formulario__label">Servicio de Pedicure</label>
                <br>
                <label><input type="radio" name="genero" value="masculino"> Basico </label>
                <br>
                <label><input type="radio" name="genero" value="femenino"> Semipermanente</label>
                <br>


                <hr>
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="visita" class="formulario__label">Peluqueria y barberia</label>
                    <div class="formulario__grupo-input">
                        <label><input type="checkbox" class="formulario__label" name="arte">Peluqueria</label><br>
                        <br>
                        <label><input type="checkbox" class="formulario__label" name="arte">Barberia</label><br>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">.</p>
                </div>
                <hr>

                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="visita" class="formulario__label">Mas opciones</label>
                    <div class="formulario__grupo-input">
                        <label><input type="checkbox" class="formulario__label" name="arte">BBGLOW</label><br>

                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">.</p>
                </div>
                <hr>

                <br>
                <br>


                <div class="formulario__grupo" id="grupo__visita">
                    <label for="visita" class="formulario__label">Descripcion</label>
                    <div class="formulario__grupo-input">
                        <textarea name="mensaje" class="formulario__input" id="messages" placeholder="Colocar la descripcion de lo que el cliente se esta haciendo si asi se amerita" required=""></textarea>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La descripción solo puede contener letras.</p>
                </div>

                <br>



                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="costo" class="formulario__label">Costo del servicio estético</label>
                    <div class="formulario__grupo-input">
                        <input type="number" name="numero" class="formulario__input" id="costo" placeholder="costo del servicio" value="" min="1" max="1000" step="1" required="" />

                    </div>
                </div>

                <br>

                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="empleado" class="formulario__label"> Empleado que realizo el servicio</label>
                    <div class="formulario__grupo-input">
                        <select name="Empleados" id="Empleados" class="formulario__input" required="">

                            <option>cd28516382- Jose Hernandez</option>
                            <option>cd14312885- Andrea Perez</option>

                        </select>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
                </div>



                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
        </div>



        <i class="formulario__validacion-estado fas fa-times-circle"></i>
</div>
<p class="formulario__input-error">.</p>
</div>




<div class="formulario__mensaje" id="formulario__mensaje">
    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
</div>




<div class="formulario__mensaje" id="formulario__mensaje">
    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
</div>

<div class="formulario__grupo formulario__grupo-btn-enviar">
    <button type="submit" class="formulario__btn">Registrar</button>
    <br>
    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
</div>
</form><br><br>

<button type="submit" class="formulario__btn" style="float: left;"><a href="?pagina=registro_clientes">Atrás</a> <i class="fas fa-arrow-left"></i></button>

<button type="submit" class="formulario__btn" style="float: right;"><a href="?pagina=registro_pagocita">Siguiente </a> <i class="fas fa-arrow-right"></i></button>



</div>
<!--main container end-->
<script src="js/servicioestetico.js"></script>
<?php require "vista/componentes/footer.php" ?>