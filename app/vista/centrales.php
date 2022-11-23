<?php require "componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Centrales Cantv</h2>
        </center>
    </div>
    <br>
    <center>
<img src="img/report.png">
</center>
    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-ZÀ-ÿ\s]{15,50}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error"> El Nombre tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Ciudad</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-ZÀ-ÿ\s]{15,50}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Ciudad tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>

        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Direccion</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-ZÀ-ÿ\s]{15,50}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error"> La Direccion tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>
        
    
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Numero de Pisos</label>
            <div class="formulario__grupo-input">
                <input type="Number" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-ZÀ-ÿ\s]{15,50}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">el Numero de Pisos  tiene que ser de 2 a 8 caracteres y solo puede contener numeros.</p>
        </div>
        <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Registrar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
        
    </form>
</div>
<script>
    $(document).ready(function() {
        $('.select-especial').select2();
    });
</script>
<script src="js/pagocita.js"></script>
<?php require "vista/componentes/footer.php" ?>