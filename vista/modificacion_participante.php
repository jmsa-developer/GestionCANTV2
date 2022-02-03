<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Participante</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">


        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Luz Raquel" value="<?= $participante->nombre ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del participante tiene que ser de 1 a 25 dígitos y solo puede contener letras.</p>
        </div>

        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__apellido">
            <label for="apellido" class="formulario__label">Apellido</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Fernández García" value="<?= $participante->apellido ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El apellido del participante tiene que ser de 1 a 25 dígitos y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__cedula">
            <label for="cedula" class="formulario__label">Cédula</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="12858735" value="<?= $participante->cedula ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Cédula del participante tiene que ser de 7 a 14 dígitos y solo puede contener numeros.</p>
        </div>
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="04121234567" value="<?= $participante->telefono ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El teléfono del participante solo puede contener números y tiene que ser de 7 a 14 dígitos, no puede contener especios.</p>
        </div>

        <div class="formulario__grupo" id="grupo__direccion">
            <label for="direccion" class="formulario__label">Dirección</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Av Rotaria" value="<?= $participante->direccion ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La dirección del participante tiene que ser de 1 a 60 dígitos y solo puede contener letras, números, caracteres especieles y espacios.</p>
        </div>

        <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo eléctronico</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="correo" id="correo" placeholder="luz_12@gmail.com" value="<?= $participante->email ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo tiene que ser de 2 a 16 dígitos y solo puede contener letras, números, caracteres especiales y espacios.</p>
        </div>

        <!-- Grupo: Día de Visita-->
        <div class="formulario__grupo" id="grupo__fecha">
            <label for="fecha" class="formulario__label">Fecha de nacimiento</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha_nacimiento" id="fecha" placeholder="01/09/2021" value="<?= $participante->fecha_nacimiento ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha de nacimiento solo puede contener numeros.</p>
        </div>


        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Modificar</button>
            <br>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
        </div>
    </form>

    <br><br>
    <button type="submit" class="formulario__btn" style="float: right;"><a href="?pagina=registro_estudiantecurso">Siguiente </a> <i class="fas fa-arrow-right"></i></button>

    <br><br>
</div>
<!--main container end-->
<script>const id = <?= $participante->id ?>;</script>
<script src="js/participante.js"></script>
<?php require "vista/componentes/footer.php" ?>