<?php require "vista/componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="card">

            <div class="row">
                <h1 class="display-8 text-center p-2 text-white bg-secondary">Cursos</h1>
            </div>

            <table class="table table-inverse" id="datatable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Hora de Inicio</th>
                        <th scope="col">Hora de Culminación</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Acciones</th>
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