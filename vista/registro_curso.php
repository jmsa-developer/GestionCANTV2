<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Cursos</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">

        <div class="formulario__grupo" id="grupo__idcurso">
            <label for="idcurso" class="formulario__label">Id Curso</label>
            <div class="formulario__grupo-input">
                <input type="number" name="idcurso" class="formulario__input" id="idcurso" placeholder="costo del servicio" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El ID del curso solo puede contener numeros y tiene que ser de 4 a 10 dígitos.</p>
        </div>
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre del curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del curso tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
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
            <p class="formulario__input-error">La duración del Curso tiene que ser de 2 a 16 dígitos y solo puede contener letras y números.</p>
        </div>

        <div class="formulario__grupo" id="grupo__costo">
            <label for="costo" class="formulario__label">Costo del curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="costo" id="costo" placeholder="10 $">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El costo del curso solo puede contener numeros y caracteres especiales, tiene que ser de 1 a 10 dígitos.</p>
        </div>

        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__horario">
            <label for="horario" class="formulario__label">Horario del curso</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="horario" id="horario" placeholder="09:00 am">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El horario del curso tiene que ser de 2 a 16 dígitos y solo puede contener letras, nuemros signos de puntuación.</p>
        </div>

        <div class="formulario__grupo" id="grupo__descripcion">
            <label for="descripcion" class="formulario__label">Descripcion del curso</label>
            <div class="formulario__grupo-input">
                <textarea name="descripcion" class="formulario__input" id="descripcion" placeholder="Colocar la descripcion del curso" required=""></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Descripcion del curso solo puede contener letras.</p>
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
<script src="js/curso.js"></script>
<?php require "vista/componentes/footer.php" ?>