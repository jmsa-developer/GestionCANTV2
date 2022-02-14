    <?php require "vista/componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="nombre">
            <center>
                <h2>Reportes</h2>
            </center>
        </div>
        <div class="row p-5 d-flex justify-content-center">
            <div class="formulario__grupo col-md-8" id="grupo__tipo">
                <label for="tipo" class="formulario__label">Tipo de Reporte: </label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input" name="tipo" id="tipo" required>
                        <option value="Clientes">Clientes</option>
                        <option value="Participantes">Participantes</option>
                        <option value="Servicios Esteticos">Servicios Esteticos</option>
                        <option value="Citas">Citas</option>
                        <option value="Cursos">Cursos</option>
                        <option value="Pagos de Citas">Pagos de Citas</option>
                        <option value="Pagos de Cursos">Pagos de Cursos</option>
                        <option value="Empleados">Empleados</option>
                        <option value="Usuarios">Usuarios</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error"></p>
            </div>

            <div class="formulario__grupo d-none col-md-6" id="grupo__desde">
                <label for="desde" class="formulario__label">Desde</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="desde" id="desde" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique la fecha</p>
            </div>
            <div class="formulario__grupo d-none col-md-6" id="grupo__hasta">
                <label for="hasta" class="formulario__label">Hasta</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="hasta" id="hasta" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique la fecha</p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar mt-3">
                <button type="submit" class="formulario__btn">Generar Reporte</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
            </div>
        </div>
    </div>
    <script src="js/reportes.js"></script>
    <?php require "vista/componentes/footer.php" ?>