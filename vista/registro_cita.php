    <?php require "vista/componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">

        <div class="nombre">
            <center>
                <h2>Registro de Cita</h2>
            </center>
        </div>
        <br>

        <form action="" class="formulario" id="formulario">

            <div class="formulario__grupo" id="grupo__idcita">
                <label for="idcita" class="formulario__label">Id Cita</label>
                <div class="formulario__grupo-input">
                    <input type="number" name="idcita" class="formulario__input" id="idcita" placeholder="Id cita" value="" min="1" max="10000" step="1" required="" />

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Id cita solo puede contener numeros y tiene que ser de 4 a 15 dígitos.</p>
            </div>

            <div class="formulario__grupo" id="grupo__fecha">
                <label for="fecha" class="formulario__label">Fecha de la cita</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El día de visita solo puede contener numeros.</p>
            </div>

            <div class="formulario__grupo" id="grupo__hora">
                <label for="hora" class="formulario__label">Hora de la cita</label>
                <div class="formulario__grupo-input">
                    <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="16:30:00" value="08:30:00">

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Hora de la cita tiene que ser de 4 a 10 dígitos y solo puede contener numeros.</p>
            </div>

            <div class="formulario__grupo" id="grupo__cita">
                <label for="cita" class="formulario__label">Cita realizada</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="cita" id="cita" placeholder="Cita realizada">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Cita realizada tiene que ser de 4 a 10 dígitos y solo puede contener letras.</p>
            </div>
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
    </div>
    <!--main container end-->
    <script src="js/cita.js"></script>
    <?php require "vista/componentes/footer.php" ?>