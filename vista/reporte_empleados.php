<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Empleados</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:100%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Empleados</h1>
                    </td>
                    <!-- <td colspan="4" style="width:20%; text-align:right;">
                        <img src="img/academiacreativa.png" style="width:80%; height:auto;">
                    </td> -->
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />
        <div>
            <div style="display: inline; width:30%; padding-right:2px;">
                <b>Nombres y Apellidos</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Cédula</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Teléfono</b>
            </div>
            <div style="display: inline; width:20%; padding-right:2px;">
                <b>Horario</b>
            </div>
            <div style="display: inline; width:19.5%; padding-right:2px;">
                <b>Rol</b>
            </div>
        </div>
        <?php foreach ($empleados as $empleado) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:30%; padding-right:2px;">
                    <?= $empleado->nombre ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $empleado->cedula ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $empleado->telefono ?>
                </div>
                <div style="display: inline; width:20%; padding-right:2px;">
                    <?= $empleado->horario ?>
                </div>
                <div style="display: inline; width:19.5%; padding-right:2px;">
                    <?= $empleado->rol ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Empleados: </b><?= count($empleados) ?></p>
    </div>
</body>

</html>