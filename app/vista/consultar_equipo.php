<?php require "vista/componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="card">

            <div class="row">
                <h1 class="display-8 text-center p-2 text-white bg-secondary">Consultar Equipos</h1>
            </div>

            <table class="table table-inverse" id="datatable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Tipo de Equipo</th>
                        <th scope="col">Cantidad registrada</th>
                        <th scope="col">Nro  inventario</th>
                        
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
    <!--main container end-->
    <script src="js/cursos_gestion.js"></script>
    <?php require "vista/componentes/footer.php" ?>