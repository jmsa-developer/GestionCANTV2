<?php require "componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">

        <div class="nombre">
            <center>
                <h2>Registro de Entradas</h2>
            </center>
        </div>
        <br>

        <form class="formulario" id="formulario">

            <div class="formulario__grupo" id="grupo__cliente_id">
                <label for="cliente_id" class="formulario__label">Supervisor</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input select-especial" id="cliente_id" name="cliente_id">
                        <option value=""></option>
                        <?php foreach ($supervisores as $supervisor) : ?>
                            <option value="<?= $supervisor->id ?>"><?= $supervisor->cedula ?> // <?= $supervisor->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione un Supervisor.</p>
            </div>

            <div class="formulario__grupo" id="grupo__">
            </div>

            <div class="formulario__grupo" id="grupo__servicio_id">
                <label for="servicio_id" class="formulario__label">Central</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input select-especial" id="servicio_id" name="servicio_id">
                        <option value=""></option>
                        <?php foreach ($centrales as $central) : ?>
                            <option value="<?= $central->id ?>"><?= $central->nombre_ciudad ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione una Central.</p>
            </div>

            <div class="formulario__grupo" id="grupo__empleado_id">
                <label for="empleado_id" class="formulario__label">Empleado</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input select-especial" id="empleado_id" name="empleado_id">
                        <option value=""></option>
                        <?php foreach ($empleados as $empleado) : ?>
                            <option value="<?= $empleado->id ?>"><?= $empleado->cedula ?> // <?= $empleado->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione el Empleado que realiza el Servicio.</p>
            </div>

            <div class="formulario__grupo" id="grupo__fecha">
                <label for="fecha" class="formulario__label">Fecha de la entrada</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fecha" id="fecha" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Fecha de la entrada es obligatoria .</p>
            </div>

            <div class="formulario__grupo" id="grupo__hora">
                <label for="hora" class="formulario__label">Hora de la entrada</label>
                <div class="formulario__grupo-input">
                    <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="20:30:00" required>

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La Hora de la entrada es obligatoria.</p>
            </div>

            <div class="formulario__grupo" id="grupo__servicio_id">
                <label for="servicio_id" class="formulario__label">Serial del Equipo</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input select-especial" id="servicio_id" name="servicio_id">
                        <option value=""></option>
                        <?php foreach ($servicios as $servicio) : ?>
                            <option value="<?= $servicio->id ?>"><?= $servicio->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione un Equipo .</p>
            </div>

            <div class="formulario__grupo" id="grupo__cita_realizada">
                <label for="cita_realizada" class="formulario__label">Estatus del equipo</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input" name="cita_realizada" id="cita_realizada">
                        <option value="0">Permanencia</option>
                        <option value="1">Temporal</option>
                        <option value="2">Visitante</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Seleccione una opcion.</p>
            </div>
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
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
    <?php require "componentes/footer.php" ?>