<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Usuarios</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:100%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Usuarios</h1>
                    </td>
                    <!-- <td colspan="4" style="width:20%; text-align:right;">
                        <img src="img/academiacreativa.png" style="width:80%; height:auto;">
                    </td> -->
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />
        <div>
            <div style="display: inline; width:18%; padding-right:2px;">
                <b>Nombre de Usuario</b>
            </div>
            <div style="display: inline; width:22%; padding-right:2px;">
                <b>Nombres y Apellidos</b>
            </div>
            <div style="display: inline; width:13%; padding-right:2px;">
                <b>Cédula</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Rol</b>
            </div>
            <div style="display: inline; width:30%; padding-right:2px;">
                <b>Correo Electrónico</b>
            </div>
        </div>
        <?php foreach ($usuarios as $usuario) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:18%; padding-right:2px;">
                    <?= $usuario->usuario ?>
                </div>
                <div style="display: inline; width:22%; padding-right:2px;">
                    <?= $usuario->nombre ?>
                </div>
                <div style="display: inline; width:13%; padding-right:2px;">
                    <?= $usuario->cedula ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $usuario->rol ?>
                </div>
                <div style="display: inline; width:31.5%; padding-right:2px;">
                    <?= $usuario->email ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Usuarios: </b><?= count($usuarios) ?></p>
    </div>
</body>

</html>