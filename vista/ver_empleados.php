<?php require "vista/componentes/header.php" ?>
<!--main container start-->
<div class="main-container">
    <div class="card">
        <div class="row pb-2">
            <div class="col">
                <form action=" " method="POST">
                    <input type="search" class="form-control" name="buscar" placeholder="Buscar en Empleados...">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-secondary w-100" name="btn-buscar">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="row">
            <h1 class="display-8 text-center p-2 text-white bg-secondary">Tabla Empleados</h1>
        </div>

        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Cumple</th>
                    <th>F/ Contrato</th>
                    <th>Horario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>



        </table>
    </div>

</div>
<!--main container end-->

<?php require "vista/componentes/footer.php" ?>