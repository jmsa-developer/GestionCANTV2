<?php require "componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="nombre">
            <center>
                <h2>Reportes</h2>
            </center>
        </div>
        <form class="row p-5 d-flex justify-content-center" id="formulario" method="POST" action="?pagina=reporte_" target="_blank">
            <div class="formulario__grupo col-md-8" id="grupo__tipo">
                <label for="tipo" class="formulario__label">Tipo de Reporte: </label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input" name="tipo" id="tipo" required>
                        <option value="entradas">Entradas</option>
                        <option value="salidas">Salidas</option>
                        <option value="equipos">Equipos registrados</option>
                        <option value="empleados">Empleados</option>
                        <option value="usuarios">Usuarios</option>
                        <option value="planilla">planilla de salida</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error"></p>
            </div>

            <div class="formulario__grupo formulario__grupoFecha d-none col-md-6" id="grupo__desde">
                <label for="desde" class="formulario__label">Desde</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="desde" id="desde">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique la fecha</p>
            </div>
            <div class="formulario__grupo formulario__grupoFecha d-none col-md-6" id="grupo__hasta">
                <label for="hasta" class="formulario__label">Hasta</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="hasta" id="hasta">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique la fecha</p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar mt-3">
                <button type="submit" class="formulario__btn">Generar Reporte</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
            </div>
        </form>
    </div>
    <script src="js/reportes.js"></script>
    <?php require "componentes/footer.php" ?>