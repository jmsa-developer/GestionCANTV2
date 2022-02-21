<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Pagos de Citas</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:100%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Pagos de Citas</h1>
                    </td>
                    <!-- <td colspan="4" style="width:20%; text-align:right;">
                        <img src="img/academiacreativa.png" style="width:80%; height:auto;">
                    </td> -->
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />
        <span><b>Desde:</b> <?= $desde ?></span>
        <br>
        <span><b>Hasta:</b> <?= $hasta ?></span>
        <br>
        <br>
        <div>
            <div style="display: inline; width:12%; padding-right:2px;">
                <b>Fecha</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Pago Total</b>
            </div>
            <div style="display: inline; width:14%; padding-right:2px;">
                <b>Tipo de Pago</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Nro Comprobante</b>
            </div>
            <div style="display: inline; width:20%; padding-right:2px;">
                <b>Servicio</b>
            </div>
            <div style="display: inline; width:23%; padding-right:2px;">
                <b>Cliente</b>
            </div>
        </div>
        <?php foreach ($pagos as $pago) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:12%; padding-right:2px;">
                    <?= $pago->fecha ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $pago->pago_total ?>
                </div>
                <div style="display: inline; width:14%; padding-right:2px;">
                    <?= $pago->tipo ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $pago->nro_comprobante ?>
                </div>
                <div style="display: inline; width:20%; padding-right:2px;">
                    <?= $pago->servicio ?>
                </div>
                <div style="display: inline; width:23%; padding-right:2px;">
                    <?= $pago->cliente ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Pagos de Citas: </b><?= count($pagos) ?></p>
    </div>
</body>

</html>