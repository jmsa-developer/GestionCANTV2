<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro de Pago Curso</h2>
        </center>
    </div>
    <br>
    <form action="" class="formulario" id="formulario">

        <div class="formulario__grupo" id="grupo__idpago">
            <label for="idpago" class="formulario__label">Id Pago</label>
            <div class="formulario__grupo-input">
                <input type="number" name="idpago" class="formulario__input" id="idpago" placeholder="Id del pago" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Id del Pago solo puede contener numeros y tiene que ser de 4 a 20 dígitos.</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__fecha">
            <label for="fecha" class="formulario__label">Fecha del pago</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="01/09/2021" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Fecha del pago tiene que ser de 2 a 16 dígitos y solo puede contener números.</p>
        </div>

        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__hora">
            <label for="hora" class="formulario__label">Hora del pago</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="16:30:00" value="08:30:00" required="">

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Hora del pago tiene que ser de 4 a 10 dígitos y solo puede contener numeros y letras.</p>
        </div>



        <div class="formulario__grupo" id="grupo__tipo">
            <label for="tipo" class="formulario__label">Tipo de pago</label>
            <div class="formulario__grupo-input">

                <label><input type="checkbox" class="formulario__label" name="arte">Divisas</label><br>

                <label><input type="checkbox" class="formulario__label" name="television">Bolivares Efectivo</label><br>

                <label><input type="checkbox" class="formulario__label" name="arte">Debito</label><br>

                <i class="formulario__validacion-estado fas fa-times-circle"></i>




            </div>
            <p class="formulario__input-error">El Tipo de pago solo puede contener letras y tiene que ser de 4 a 30 dígitos.</p>
        </div>
        <!-- Grupo: cédula -->



        <div class="formulario__grupo" id="grupo__comprobante">
            <label for="comprobante" class="formulario__label">Nro del comprobante</label>

            <div class="formulario__grupo-input">
                <input type="number" name="comprobante" class="formulario__input" id="comprobante" placeholder="Nro del comprobante" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Nro del comprobante tiene que ser de 2 a 20 dígitos y solo puede contener números.</p>
        </div>




        <div class="formulario__grupo" id="grupo__total">
            <label for="total" class="formulario__label">Pago Total del Curso</label>

            <div class="formulario__grupo-input">
                <input type="number" name="total" class="formulario__input" id="total" placeholder="Pago total del curso" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Pago Total del Curso tiene que ser de 2 a 20 dígitos y solo puede contener números.</p>
        </div>

        <div class="formulario__grupo" id="grupo__abono">
            <label for="abono" class="formulario__label">Abono</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="abono" id="abono" placeholder="10 $">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El abono tiene que ser de 4 a 10 dígitos y solo puede contener numeros y caracteres especiales.</p>
        </div>

        <div class="formulario__grupo" id="grupo__descripcion">
            <label for="descripcion" class="formulario__label">Descripcion</label>
            <div class="formulario__grupo-input">
                <textarea name="descripcion" class="formulario__input" id="descripcion" placeholder="Colocar la descripcion de como fue el pago" required=""></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Descripcion solo puede contener letras.</p>
        </div>



        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>



    </form>
    <br>
    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Registrar</button>

        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
    </div>
    <br>
    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Imprimir</button>

        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
    </div>
    <br><br>

    <button type="submit" class="formulario__btn" style="float: left;"><i class="fas fa-arrow-left"></i><a href="?pagina=registro_estudiantecurso">Atrás</a> </button>

    <br><br>
</div>
<!--main container end-->
<script src="js/pagocurso.js"></script>
<?php require "vista/componentes/footer.php" ?>