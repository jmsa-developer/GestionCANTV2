    <?php require "vista/componentes/header.php" ?>
    <!--Formulario-->
    <div class="main-container">

        <div class="nombre">
            <center>
                <h2>Perfil</h2>
            </center>
        </div>
        <br>
        <form action="" class="formulario" id="formulario">
            <!-- Grupo: Numero socio -->
            <div class="formulario__grupo" id="grupo__cedula">
                <label for="cedula" class="formulario__label">Cedula</label>
                <div class="formulario__grupo-input">
                    <input type="tel" name="cedula" class="formulario__input" id="cedula" placeholder="Cédula" pattern="[0-9]{7,8}" required value="<?= $usuario->cedula ?>">
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
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre" pattern="[a-zA-ZÀ-ÿ\s]{1,40}" required value="<?= $usuario->nombre ?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 1 a 40 caracteres y solo puede contener letras.</p>
            </div>
            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellidos</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Apellido" pattern="[a-zA-ZÀ-ÿ\s]{1,40}" required value="<?= $usuario->apellido ?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El apellido tiene que ser de 1 a 40 caracteres y solo puede contener letras.</p>
            </div>
            <!-- Grupo: Correo -->
            <div class="formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Correo eléctronico</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Correo Electrónico" maxlength="100"  required value="<?= $usuario->email ?>">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El Correo Electrónico no es válido.</p>
            </div>
            <div class="formulario__grupo" id="grupo__usuario">
                <label for="usuario" class="formulario__label">Nombre de Usuario</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuario" required value="<?= $usuario->usuario ?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Nombre de Usuario tiene que ser de 2 a 16 caracteres</p>
            </div>

            <div class="formulario__grupo" id="grupo__password">
                <label for="password" class="formulario__label">Contraseña</label>
                <div class="formulario__grupo-input">
                    <input type="password" name="password" id="password" class="formulario__input" pattern=".{4,16}" title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito." >
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito.</p>
            </div>
            <div class="formulario__grupo" id="grupo__password2">
                <label for="password2" class="formulario__label">Confirmar contraseña</label>
                <div class="formulario__grupo-input">
                    <input type="password" name="password2" id="password2" class="formulario__input" pattern=".{4,16}" title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito." >
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Las contraseñas no coinciden.</p>
            </div>
            <?php if($_SESSION['ac_rol'] == "Administrador" && $_SESSION['ac_id'] != 1){?>
            <div class="formulario__grupo" id="grupo__rol">
                <label for="rol" class="formulario__label">Rol de Usuario</label>
                <div class="formulario__grupo-input">
                    <select type="rol" name="rol" id="rol" class="formulario__input" title="Indique el Rol del Usuario" required>
                        <option value="Usuario">Usuario</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique el Rol del Usuario</p>
            </div>
            <?php }else{ ?>
            <input type="hidden" name="rol" id="rol" value="<?= $usuario->rol ?>" />
            <?php } ?>

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Modificar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
            </div>
        </form>
    </div>
    <!--main container end-->
    <script>
        const id = <?= $usuario->id ?>;
        const usuario_rol = "<?= $usuario->rol ?>";
    </script>
    <script src="js/usuario.js"></script>
    <?php require "vista/componentes/footer.php" ?>