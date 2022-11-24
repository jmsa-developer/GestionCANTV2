<?php require "componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="card">

            <div class="row">
                <h1 class="display-8 text-center p-2 text-white bg-secondary">Consultar Usuarios</h1>
            </div>

            <table class="table table-inverse" id="datatable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Nombres y Apellidos</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
    <!--main container end-->
    <script src="js/usuarios_gestion.js"></script>
    <?php require "componentes/footer.php" ?>