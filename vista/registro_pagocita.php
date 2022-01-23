<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Registro del Pago</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">
        <div class="formulario__grupo" id="grupo__pago">
            <label for="pago" class="formulario__label">Id Pago</label>
            <div class="formulario__grupo-input">
                <input type="number" name="pago" class="formulario__input" id="pago" placeholder="costo del servicio" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El ID de pago solo puede contener numeros y tiene que ser de 4 a 10 dígitos.</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Fecha del pago</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="visita" id="visita" placeholder="01/09/2021" required="">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
        </div>

        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__cedula">
            <label for="hora" class="formulario__label">Hora del pago</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="16:30:00" value="08:30:00" required="">

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La Cédula tiene que ser de 4 a 10 dígitos y solo puede contener numeros.</p>
        </div>



        <div class="formulario__grupo" id="grupo__socio">
            <label for="socio" class="formulario__label">Tipo de pago</label>
            <div class="formulario__grupo-input">

                <label><input type="radio" class="formulario__label" name="arte">Divisas</label><br>

                <label><input type="radio" class="formulario__label" name="television">Bolivares Efectivo</label><br>

                <label><input type="radio" class="formulario__label" name="arte">Debito</label><br>

                <i class="formulario__validacion-estado fas fa-times-circle"></i>




            </div>
            <p class="formulario__input-error">El Número de socio solo puede contener numeros y tiene que ser de 4 a 10 dígitos.</p>
        </div>
        <!-- Grupo: cédula -->



        <div class="formulario__grupo" id="grupo__comprobante">
            <label for="comprobante" class="formulario__label">Nro del comprobante</label>

            <div class="formulario__grupo-input">
                <input type="number" name="comprobante" class="formulario__input" id="comprobante" placeholder="costo del servicio" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
        </div>




        <div class="formulario__grupo" id="grupo__nombre">
            <label for="costo" class="formulario__label">Pago Total del Servicio</label>

            <div class="formulario__grupo-input">
                <input type="number" name="numero" class="formulario__input" id="costo" placeholder="costo del servicio" value="" min="1" max="1000" step="1" required="" />

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre tiene que ser de 2 a 16 dígitos y solo puede contener letras.</p>
        </div>


        <div class="formulario__grupo" id="grupo__visita">
            <label for="visita" class="formulario__label">Descripcion</label>
            <div class="formulario__grupo-input">
                <textarea name="mensaje" class="formulario__input" id="messages" placeholder="Colocar la descripcion de como fue el pago" required=""></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El día de visita solo puede contener numeros.</p>
        </div>







        <!-- Grupo: Apellido -->

        <!-- Grupo: Día de Visita-->


        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Registrar</button>

            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>

    </form>
    <br>
    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Imprimir</button>

        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
    </div>
    <br>
    <button type="submit" class="formulario__btn" style="float: left;"><a href="?pagina=registro_servicioestetico">Atrás </a> <i class="fas fa-arrow-left"></i></button>

</div>
<script src="js/pagocita.js"></script>
<?php require "vista/componentes/footer.php" ?>