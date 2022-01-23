    <?php require "vista/componentes/header.php" ?>
    <!--Formulario-->
    <div class="main-container">

        <div class="nombre">
            <center>
                <h2>Registro de Usuario</h2>
            </center>
        </div>
        <br>

        <form action="" class="formulario" id="formulario">

            <!-- Grupo: Numero socio -->
            <div class="formulario__grupo" id="grupo__cedula">
                <label for="cedula" class="formulario__label">Cedula</label>
                <div class="formulario__grupo-input">
                    <input type="tel" name="cedula" class="formulario__input" id="cedula" placeholder="28516382" pattern="[0-9]{8}" required="">

                    <i class="formulario__validacion-estado fas fa-times-circle"></i>



                </div>
                <p class="formulario__input-error">El Número de socio solo puede contener numeros y tiene que ser de 4 a 10 dígitos.</p>
            </div>
            <div class="formulario__grupo">
            </div>

            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombres</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Luz Raquel">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 1 a 25 dígitos y solo puede contener letras.</p>
            </div>

            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellidos</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Fernández García">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El apellido tiene que ser de 1 a 25 dígitos y solo puede contener letras.</p>
            </div>
            <div class="formulario__grupo" id="grupo__usuario">
                <label for="usuario" class="formulario__label">Nombre de usuario</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Luz Raquel" required="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
            </div>

            <div class="formulario__grupo" id="grupo__password">
                <label for="password" class="formulario__label">Contraseña</label>
                <div class="formulario__grupo-input">
                    <input type="password" name="password" id="password" class="formulario__input" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito. La contraseña debe empezar con una letra y contener al menor un dígito" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito. La contraseña debe empezar con una letra y contener al menor un dígito</p>
            </div>
            <div class="formulario__grupo" id="grupo__password2">
                <label for="password2" class="formulario__label">Confirmar contraseña</label>
                <div class="formulario__grupo-input">
                    <input type="password" name="password2" id="password2" class="formulario__input" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito. La contraseña debe empezar con una letra y contener al menor un dígito" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Las contraseñas no coinciden.</p>
            </div>



            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
    </div>
    <!--main container end-->
    <script src="js/usuario.js"></script>
    <?php require "vista/componentes/footer.php" ?>