<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Servicio Estético</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre del Servicio Estético</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del Servicio Estético">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del Servicio Estético tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>

        <div class="formulario__grupo" id="grupo__costo">
            <label for="costo" class="formulario__label">Costo del Servicio Estético</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="costo" id="costo" step="any" placeholder="10 $"  required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El costo del Servicio Estético solo puede contener numeros, decimales o enteros.</p>
        </div>

        <div class="formulario__grupo" id="grupo__tipo">
            <label for="tipo" class="formulario__label">Tipo de servicio</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="tipo" id="tipo" placeholder="Tipo de servicio Estético">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Tipo de servicio tiene que ser de 2 a 30 caracteres y solo puede contener letras.</p>
        </div>

        <div class="formulario__grupo" id="grupo__descripcion">
            <label for="descripcion" class="formulario__label">Descripcion del Servicio Estético</label>
            <div class="formulario__grupo-input">
                <textarea name="descripcion" class="formulario__input" id="descripcion" placeholder="Colocar la descripcion del Servicio Estético" required=""></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Descripcion del curso solo puede contener maximo 200 digitos.</p>
        </div>


        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>
        <br><br>
        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Registrar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>
    </form>
</div>
<!--main container end-->
<script src="js/servicio.js"></script>
<?php require "vista/componentes/footer.php" ?>