<?php require "componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Modificación de Equipo</h2>
        </center>
    </div>
    <br>
    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Serial</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Serial tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Marca</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Marca tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Modelo</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El modelo tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>

        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Tipo de Equipo</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El tipo de equipo tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>
        
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Central de origen</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Central tiene que ser de 2 a 50 caracteres y solo puede contener letras.</p>
        </div>

        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Numero de inventario</label>
            <div class="formulario__grupo-input">
                <input type="Number" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del curso">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">el Numero de Inventario  tiene que ser de 2 a 8 caracteres y solo puede contener numeros.</p>
        </div>
        <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Modificar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
            </div>
       
            </form>
   
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