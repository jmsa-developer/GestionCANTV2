<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">

    <div class="nombre">
        <center>
            <h2>Modificación del Pago</h2>
        </center>
    </div>
    <br>

    <form action="" class="formulario" id="formulario">
        <div class="formulario__grupo" id="grupo__cita_id">
            <label for="cita_id" class="formulario__label">Cita</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input select-especial" id="cita_id" name="cita_id">
                    <option value=""></option>
                    <?php foreach ($citas as $cita) : ?>
                        <option value="<?= $cita->id ?>"><?= $cita->fecha ?> // <?= $cita->cliente ?> // <?= $cita->servicio ?></option>
                    <?php endforeach; ?>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Seleccione la Cita</p>
        </div>

        <!-- Grupo: fecha -->
        <div class="formulario__grupo" id="grupo__fecha">
            <label for="fecha" class="formulario__label">Fecha del pago</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha" id="fecha" required="" value="<?= $pago->fecha ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Indique la fecha</p>
        </div>

        <!-- Grupo: hora -->
        <div class="formulario__grupo" id="grupo__hora">
            <label for="hora" class="formulario__label">Hora del pago</label>
            <div class="formulario__grupo-input">
                <input type="time" class="formulario__input" name="hora" id="hora" min="07:00:00" max="16:30:00" required="" value="<?= $pago->hora ?>">

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Indique la hora</p>
        </div>

        <div class="formulario__grupo" id="grupo__tipo">
            <label for="tipo" class="formulario__label">Tipo de pago</label>
            <div class="formulario__grupo-input">
                <select name="tipo" id="tipo">
                    <option value="Punto de Venta">Punto de Venta</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Pago Movil">Pago Movil</option>
                    <option value="Efectivo BSS">Efectivo BSS</option>
                    <option value="Efectivo USD">Efectivo USD</option>>
                    <option value="Otro">Otro</option>>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Seleccione el tipo de pago</p>
        </div>
        <!-- Grupo: comprobante -->

        <div class="formulario__grupo" id="grupo__nro_comprobante">
            <label for="nro_comprobante" class="formulario__label">Nro del comprobante</label>

            <div class="formulario__grupo-input">
                <input type="number" name="nro_comprobante" class="formulario__input" id="nro_comprobante" placeholder="00001111" min="1" step="1" value="<?= $pago->nro_comprobante ?>"/>

                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nro de comprobante tiene que ser de 2 a 14 dígitos y solo puede contener números</p>
        </div>

        <div class="formulario__grupo" id="grupo__pago_total">
            <label for="pago_total" class="formulario__label">Pago Total del Servicio</label>
            <div class="formulario__grupo-input">
                <input type="number" name="pago_total" class="formulario__input" id="pago_total" placeholder="Monto del pago" min="1" step="any" required="" value="<?= $pago->pago_total ?>"/>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El pago es obligatorio</p>
        </div>

        <div class="formulario__grupo" id="grupo__descripcion">
            <label for="descripcion" class="formulario__label">Descripcion</label>
            <div class="formulario__grupo-input">
                <textarea name="descripcion" class="formulario__input" id="descripcion" placeholder="Descripcion del pago" rows="2" maxlength="250"><?= $pago->descripcion ?></textarea>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El día de visita solo puede contener numeros.</p>
        </div>

        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Modificar</button>

            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
        </div>

    </form>
</div>
<script>
    $(document).ready(function() {
        $('#cita_id').val(<?= $pago->cita_id ?>)
        $('.select-especial').select2();
        $('#tipo').val("<?= $pago->tipo ?>");
    });
</script>
<script>const id = <?= $pago->id ?>;</script>
<script src="js/pagocita.js"></script>
<?php require "vista/componentes/footer.php" ?>