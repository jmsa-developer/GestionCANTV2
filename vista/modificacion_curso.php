<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Modificación de Curso</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre del curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" value="<?= $curso->nombre ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del curso tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
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
                <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021" value="<?= $curso->fecha ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha del curso solo puede contener numeros.</p>
        </div>
        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__duracion">
            <label for="duracion" class="formulario__label">Duración del Curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="duracion" id="duracion" placeholder="3 días" value="<?= $curso->duracion ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La duración del Curso tiene que ser de 2 a 16 dígitos y solo puede contener letras y números.</p>
        </div>

        <div class="formulario__grupo" id="grupo__costo">
            <label for="costo" class="formulario__label">Costo del curso</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="costo" id="costo" min="0" step="any" placeholder="10 $" value="<?= $curso->costo ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El costo del curso solo puede contener numeros y caracteres especiales, tiene que ser de 1 a 10 dígitos.</p>
        </div>

        <!-- Grupo: Hora -->
        <div class="formulario__grupo" id="grupo__">
        </div>
        <div class="formulario__grupo" id="grupo__hora_inicio">
            <label for="hora_inicio" class="formulario__label">Hora de Inicio</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora_inicio" id="hora_inicio" required value="<?= $curso->hora_inicio ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Indique la Hora de Inicio</p>
        </div>
        <div class="formulario__grupo" id="grupo__hora_culminacion">
            <label for="hora_culminacion" class="formulario__label">Hora de Culminación</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora_culminacion" id="hora_culminacion" required value="<?= $curso->hora_culminacion ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Indique la Hora de Culminación</p>
        </div>


        <div class="formulario__grupo" id="grupo__descripcion">
            <label for="descripcion" class="formulario__label">Descripcion del curso</label>
            <div class="formulario__grupo-input">
                <textarea name="descripcion" class="formulario__input" id="descripcion" placeholder="Colocar la descripcion del curso" maxlength="250"><?= $curso->descripcion ?></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Descripcion no puede ser mayor a 250 caracteres</p>
        </div>


        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Modificar</button>

            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
        </div>
        <hr>
        <hr class="d-none d-md-block">
    </form>
    <div class="row mt-3 px-4">
        <div class="nombre">
            <center>
                <h2>Participantes del Curso</h2>
            </center>
        </div>
        <div class="card">
            <table class="table table-inverse" id="datatable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombres y Apellidos</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Teléfono</th>
                    </tr>
                </thead>
                <tbody id="tabla-cuerpo">
                    <?php foreach ($participantes as $participante) : ?>
                        <tr>
                            <td><?= $participante->nombre ?></td>
                            <td><?= $participante->cedula ?></td>
                            <td><?= $participante->telefono ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (count($participantes) == 0) { ?>
                        <tr>
                            <td colspan="3">No hay participantes en este curso</td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#empleado_id').val(<?= $curso->empleado_id ?>)
        $('.select-especial').select2();
    });
</script>
<script>
    const id = <?= $curso->id ?>;
</script>
<script src="js/curso.js"></script>
<?php require "vista/componentes/footer.php" ?>