<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Curso</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre del curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del curso tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__empleado_id">
            <label for="empleado_id" class="formulario__label">Instructor del Curso</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input select-especial" id="empleado_id" name="empleado_id">
                    <option value=""></option>
                    <?php foreach ($empleados as $empleado) : ?>
                        <option value="<?= $empleado->id ?>"><?= $empleado->cedula ?> // <?= $empleado->nombre ?></option>
                    <?php endforeach; ?>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Seleccione el Instructor</p>
        </div>

        <div class="formulario__grupo" id="grupo__fecha">
            <label for="fecha" class="formulario__label">Fecha del curso</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha del curso solo puede contener numeros.</p>
        </div>
        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__duracion">
            <label for="duracion" class="formulario__label">Duración del Curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="duracion" id="duracion" placeholder="3 días">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La duración del Curso tiene que ser de 1 a 20 caracteres,puede contener numeros, letras y caracteres especiales</p>
        </div>

        <div class="formulario__grupo" id="grupo__costo">
            <label for="costo" class="formulario__label">Costo del curso</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="costo" id="costo" min="0" step="any" placeholder="10 $">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El costo del curso solo puede contener numeros, es obligatorio.</p>
        </div>

        <!-- Grupo: Hora -->
        <div class="formulario__grupo" id="grupo__">
        </div>
        <div class="formulario__grupo" id="grupo__hora_inicio">
            <label for="hora_inicio" class="formulario__label">Hora de Inicio</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora_inicio" id="hora_inicio" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Indique la hora de inicio</p>
        </div>
        <div class="formulario__grupo" id="grupo__hora_culminacion">
            <label for="hora_culminacion" class="formulario__label">Hora de Culminación</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora_culminacion" id="hora_culminacion" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Indique la hora de culminación</p>
        </div>

        <div class="formulario__grupo" id="grupo__descripcion">
            <label for="descripcion" class="formulario__label">Descripcion del curso</label>
            <div class="formulario__grupo-input">
                <textarea name="descripcion" class="formulario__input" id="descripcion" placeholder="Colocar la descripcion del curso" maxlength="250" required=""></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Descripcion del curso  no puede ser mayor a 250 caracteres.</p>
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
<script>
    $(document).ready(function() {
        $('.select-especial').select2();
    });
</script>
<script src="js/curso.js"></script>
<?php require "vista/componentes/footer.php" ?>