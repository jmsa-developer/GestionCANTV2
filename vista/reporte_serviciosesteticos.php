<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Servicios</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:80%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Servicios</h1>
                    </td>
                    <td colspan="4" style="width:20%; text-align:right;">
                        <img src="img/academiacreativa.png" style="width:80%; height:auto;">
                    </td>
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />
        <div>
            <div style="display: inline; width:25%; padding-right:2px;">
                <b>Nombre</b>
            </div>
            <div style="display: inline; width:20%; padding-right:2px;">
                <b>Tipo</b>
            </div>
            <div style="display: inline; width:14%; padding-right:2px;">
                <b>Costo</b>
            </div>
            <div style="display: inline; width:34.5%; padding-right:2px;">
                <b>Descripción</b>
            </div>
        </div>
        <?php foreach ($servicios as $servicio) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:25%; padding-right:2px;">
                    <?= $servicio->nombre ?>
                </div>
                <div style="display: inline; width:20%; padding-right:2px;">
                    <?= $servicio->tipo ?>
                </div>
                <div style="display: inline; width:14%; padding-right:2px;">
                    <?= $servicio->costo ?>
                </div>
                <div style="display: inline; width:39.5%; padding-right:2px;">
                    <?= $servicio->descripcion ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Servicios: </b><?= count($servicios) ?></p>
    </div>
</body>

</html>