<?php require "vista/componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="card">

            <div class="row">
                <h1 class="display-8 text-center p-2 text-white bg-secondary">Pagos de Servicios Estéticos</h1>
            </div>

            <table class="table table-inverse" id="datatable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Pago Total</th>
                        <th scope="col">Nro de Comprobante</th>
                        <th scope="col">Tipo de Pago</th>
                        <th scope="col">Cita del Servicio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
    <!--main container end-->
    <script src="js/pagoscitas_gestion.js"></script>
    <?php require "vista/componentes/footer.php" ?>