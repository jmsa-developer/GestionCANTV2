    <?php require "vista/componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="nombre">
            <center>
                <h2>Modificación de Cliente</h2>
            </center>
        </div>
        <br>

        <div class="formulario__grupo" id="grupo__socio">
            <label for="socio" class="formulario__label">Buscar <i class="fas fa-search"></i></li></label>
            <div class="formulario__grupo-input">

                <input type="text" name="q" class="formulario__label" placeholder="Buscar">

                <i class="formulario__validacion-estado fas fa-times-circle"></i>



            </div>


            </br></br>
            <form action="" class="formulario" id="formulario">
                <div class="formulario__grupo" id="grupo__cedula">
                    <label for="cedula" class="formulario__label">Cedula</label>
                    <div class="formulario__grupo-input">
                        <input type="tel" name="cedula" class="formulario__input" id="cedula" placeholder="28516382" pattern="[0-9]{8}" value="<?= $cliente->cedula ?>">

                        <i class="formulario__validacion-estado fas fa-times-circle"></i>



                    </div>
                    <p class="formulario__input-error">La cedula solo puede contener numeros y tiene que ser de 7 a 14 dígitos.</p>
                </div>
                

                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombres</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Luz Raquel" value="<?= $cliente->nombre ?>">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre tiene que ser de 1 a 25 dígitos y solo puede contener letras.</p>
                </div>

                <!-- Grupo: Apellido -->
                <div class="formulario__grupo" id="grupo__apellido">
                    <label for="apellido" class="formulario__label">Apellidos</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Fernández García" value="<?= $cliente->apellido ?>">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El apellido tiene que ser de 1 a 25 dígitos y solo puede contener letras.</p>
                </div>
                <div class="formulario__grupo" id="grupo__telefono">
                    <label for="telefono" class="formulario__label">Teléfono</label>
                    <div class="formulario__grupo-input">
                        <input type="tel" name="telefono" class="formulario__input" id="telefono" name="telefono" placeholder="04245127665" pattern="[0-9]{11}" value="<?= $cliente->telefono ?>">

                        <i class="formulario__validacion-estado fas fa-times-circle"></i>



                    </div>
                    <p class="formulario__input-error">El Número de teléfono solo puede contener numeros y tiene que ser de 7 a 14 dígitos.</p>
                </div>

                <!-- Grupo: Correo -->
                <div class="formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Correo eléctronico</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Jose@gmail.com" multiple required="" value="<?= $cliente->email ?>">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo solo puede contener letras.</p>
                </div>


                <!-- Grupo: Apellido -->
                <div class="formulario__grupo" id="grupo__direccion">
                    <label for="direccion" class="formulario__label">Dirección</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Urbanizacion Rafael Caldera" required value="<?= $cliente->direccion ?>">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La dirección tiene que ser de 1 a 60 dígitos y solo puede contener letras.</p>
                </div>
                <!-- Grupo: Día de Visita-->
                <div class="formulario__grupo" id="grupo__fecha">
                    <label for="fecha_nacimiento" class="formulario__label">Fecha de nacimiento</label>
                    <div class="formulario__grupo-input">
                        <input type="date" class="formulario__input" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="01/09/2021" required="" value="<?= $cliente->fecha_nacimiento ?>">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La fecha solo puede contener numeros.</p>
                </div>


                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Modificar</button>

                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>

            </form>

            <button type="submit" class="formulario__btn" style="float: right;"><a href="?pagina=registro_servicioestetico">Siguiente </a> <i class="fas fa-arrow-right"></i></button>

            <br>
    </div>
    <script>const id = <?= $cliente->id ?>;</script>
    <script src="js/cliente.js"></script>
    <?php require "vista/componentes/footer.php" ?>
    