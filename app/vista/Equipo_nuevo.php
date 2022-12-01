<?php require "componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Equipo</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__Seriañ">
            <label for="Serial" class="formulario__label">Serial</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="Serial" placeholder="Serial del equipo" pattern="[a-zA-Z0-9]{8,20}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Serial tiene que ser de 2 a 30 caracteres.</p>
        </div>
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Marca</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-ZÀ-ÿ\s]{3,18}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Marca tiene que ser de 3 a 18 caracteres y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Modelo</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-Z0-9]{8,20}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El modelo tiene que ser de 8 a 20 caracteres y no puede llevar caracteres especiales.</p>
        </div>

        <div class="formulario__grupo" id="grupo__tipo">
            <label for="nombre" class="formulario__label">Tipo de Equipo</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="tipo de equipo" id="nombre" placeholder="Tipo de equipo"  pattern="[a-zA-ZÀ-ÿ\s]{5,12}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El tipo de equipo tiene que ser de 5 a 12 caracteres  y no puede llevar caracteres especiales</p>
        </div>
        
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Central de origen</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso" pattern="[a-zA-ZÀ-ÿ\s]{15,50}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Central tiene que ser de 15 a 50 caracteres  y no puede llevar caracteres especiales</p>
        </div>

        <div class="formulario__grupo" id="grupo__inventario">
            <label for="inventario" class="formulario__label">Numero de inventario</label>
            <div class="formulario__grupo-input">
                <input type="Number" class="formulario__input" name="nombre" id="nombre" placeholder="Numero de inventario" patter="[0-9]+">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">el Numero de Inventario  tiene que ser de 8 caracteres y solo puede contener numeros.</p>
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
<?php require "componentes/footer.php" ?>