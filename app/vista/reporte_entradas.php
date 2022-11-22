<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Clientes</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:100%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Clientes</h1>
                    </td>
                    <!-- <td colspan="4" style="width:20%; text-align:right;">
                        <img src="img/academiacreativa.png" style="width:80%; height:auto;">
                    </td> -->
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />
        <div>
            <div style="display: inline; width:20%; padding-right:2px;">
                <b>Nombres y Apellidos</b>
            </div>
            <div style="display: inline; width:10%; padding-right:2px;">
                <b>Cédula</b>
            </div>
            <div style="display: inline; width:10%; padding-right:2px;">
                <b>Teléfono</b>
            </div>
            <div style="display: inline; width:34%; padding-right:2px;">
                <b>Correo Electrónico</b>
            </div>
            <div style="display: inline; width:25%; padding-right:2px;">
                <b>Dirección</b>
            </div>
        </div>
        <?php foreach ($clientes as $cliente) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:20%; padding-right:2px;">
                    <?= $cliente->nombre ?>
                </div>
                <div style="display: inline; width:10%; padding-right:2px;">
                    <?= $cliente->cedula ?>
                </div>
                <div style="display: inline; width:10%; padding-right:2px;">
                    <?= $cliente->telefono ?>
                </div>
                <div style="display: inline; width:34%; padding-right:2px; word-wrap:break-word;">
                    <?= $cliente->email ?>
                </div>
                <div style="display: inline; width:25%; padding-right:2px;">
                    <?= $cliente->direccion ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Clientes: </b><?= count($clientes) ?></p>
    </div>
</body>

</html>