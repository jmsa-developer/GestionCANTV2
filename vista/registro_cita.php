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

            <div class="formulario__grupo" id="grupo__cliente_id">
                <label for="cliente_id" class="formulario__label">Cliente</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input select-especial" id="cliente_id" name="cliente_id">
                        <option value=""></option>
                        <?php foreach ($clientes as $cliente) : ?>
                            <option value="<?= $cliente->id ?>"><?= $cliente->cedula ?> // <?= $cliente->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione un Cliente</p>
            </div>
            <div class="formulario__grupo" id="grupo__servicio_id">
                <label for="servicio_id" class="formulario__label">Servicio</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input select-especial" id="servicio_id" name="servicio_id">
                        <option value=""></option>
                        <?php foreach ($servicios as $servicio) : ?>
                            <option value="<?= $servicio->id ?>"><?= $servicio->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione un Servicio</p>
            </div>

            <div class="formulario__grupo" id="grupo__fecha">
                <label for="fecha" class="formulario__label">Fecha de la cita</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fecha" id="fecha" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El día de visita solo puede contener numeros.</p>
            </div>

            <div class="formulario__grupo" id="grupo__hora">
                <label for="hora" class="formulario__label">Hora de la cita</label>
                <div class="formulario__grupo-input">
                    <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="16:30:00" required>

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Hora de la cita tiene que ser de 4 a 10 dígitos y solo puede contener numeros.</p>
            </div>

            <div class="formulario__grupo" id="grupo__cita_realizada">
                <label for="cita_realizada" class="formulario__label">Cita realizada</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input" name="cita_realizada" id="cita_realizada">
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                    </select>
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
    <script>
        $(document).ready(function() {
            $('.select-especial').select2();
        });
    </script>
    <script src="js/cita.js"></script>
    <?php require "vista/componentes/footer.php" ?>