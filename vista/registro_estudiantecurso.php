<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro del Curso Participante</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">

        <div class="formulario__grupo" id="grupo__curso">
            <label for="curso" class="formulario__label">Seleccione un curso</label>
            <div class="formulario__grupo-input">
                <select name="combo">
                    <!-- Opciones de la lista -->
                    <option value="0"></option>
                    <option value="1">Cejas, pestañas y Depilación.</option>
                    <option value="2">Automaquillaje</option>
                    <option value="3">Lifting de Pestañas</option>
                    <option value="4">Laminado de Pestañas</option>
                    <option value="5">Higiene Facial Profunda</option>
                    <option value="6">Micropigmentación</option>
                </select>
            </div>
        </div>

        <div class="formulario__grupo" id="grupo__fecha">
            <label for="fecha" class="formulario__label">Fecha del Curso</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha del Curso solo puede contener numeros.</p>
        </div>

        <div class="formulario__grupo" id="grupo__duracion">
            <label for="duracion" class="formulario__label">Duración del Curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="duracion" id="duracion" placeholder="3 días">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La duración del Curso tiene que ser de 1 a 10 dígitos y solo puede contener letras y números.</p>
        </div>

        <div class="formulario__grupo" id="grupo__horario">
            <label for="horario" class="formulario__label">Horario del curso</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="horario" id="horario" placeholder="09:00 am">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El horario del curso tiene que ser de 2 a 16 dígitos y solo puede contener letras, nuemros signos de puntuación.</p>
        </div>

        <div class="formulario__grupo" id="grupo__visita">
            <label for="apellido" class="formulario__label">Seleccione un Instructor</label>
            <div class="formulario__grupo-input">
                <select name="combo">
                    <!-- Opciones de la lista -->
                    <option value="1">Nelbis García.</option>
                    <option value="2">Maria Alvarado</option>
                    <option value="3">Luisa Gonzales</option>
                    <option value="4">Antonieta del Valle</option>
                    <option value="5">Ruth Martinez</option>
                    <option value="6">Ana Melendez</option>
                </select>
            </div>
        </div>

        <div class="formulario__grupo" id="grupo__costo">
            <label for="costo" class="formulario__label">Costo del Curso</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="costo" id="costo" placeholder="30$">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El costo del curso tiene que ser de 1 a 10 dígitos y solo puede contener numeros y caracteres especiales.</p>
        </div>


        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>
        <br>
        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Registrar</button>
            <br>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>
    </form>
    <br>
    <button type="submit" class="formulario__btn" style="float: left;"><i class="fas fa-arrow-left"></i><a href="?pagina=registro_estudiante">Atrás</a> </button>

    <button type="submit" class="formulario__btn" style="float: right;"><a href="?pagina=registro_pagocurso">Siguiente </a> <i class="fas fa-arrow-right"></i></button>

    <br><br>
</div>
<!--main container end-->
<script src="js/estudiantecurso.js"></script>
<?php require "vista/componentes/footer.php" ?>