<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Empleado</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">

        <div class="formulario__grupo" id="grupo__cedula">
            <label for="cedula" class="formulario__label">Cédula</label>
            <div class="formulario__grupo-input">
                <input type="tel" name="cedula" class="formulario__input" id="cedula" placeholder="28516382" pattern="[0-9]{7,8}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Cédula solo puede contener numeros y tiene que ser de 7 a 9 dígitos.</p>
        </div>
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombres</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Luz Raquel" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El campo Nombres tiene que ser de 2 a 30 caracteres y solo puede contener letras.</p>
        </div>

        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__apellido">
            <label for="apellido" class="formulario__label">Apellidos</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Fernández García" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Apellido tiene que ser de 2 a 30 caracteres y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
                <input type="tel" name="telefono" class="formulario__input" id="telefono" placeholder="04245127665" pattern="[0-9]{11}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Número de teléfono solo puede contener numeros y tiene que ser de 7 a 14 dígitos.</p>
        </div>

        

        <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo eléctronico</label>
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Jose@gmail.com" multiple required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Correo solo puede contener letras, números y caracteres especiales.</p>
        </div>

        
        <div class="formulario__grupo" id="grupo__direccion">
            <label for="direccion" class="formulario__label">Dirección</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Urbanizacion Rafael Caldera" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Dirección del empleado tiene que ser de 1 a 60 dígitos y puede contener letras, números, caracteres especiales y espacios.</p>
        </div>
        <!-- Grupo: Día de Visita-->
        <div class="formulario__grupo" id="grupo__fecha_nacimiento">
            <label for="fecha_nacimiento" class="formulario__label">Fecha de nacimiento</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="01/09/2021" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Fecha de nacimiento es obligatoria.</p>
        </div>
        <div class="formulario__grupo" id="grupo__Numero_empleado">
            <label for="fecha__Numero_empleado" class="formulario__label">P00</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="Numero_empleado" id="Numero_empleado" placeholder="P00" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Fecha de inicio de contrato es obligatoria.</p>
        </div>
        <div class="formulario__grupo" id="grupo__horario">
            <label for="horario" class="formulario__label">Horario del Turno</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="horario" id="horario" placeholder="Mañana" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Horario del Turno tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__rol">
            <label for="rol" class="formulario__label">Rol que cumple en la Empresa</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="rol" id="rol" placeholder="" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Rol tiene que ser de 2 a 25 dígitos y solo puede contener letras.</p>
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
<script src="js/empleado.js"></script>
<?php require "vista/componentes/footer.php" ?>