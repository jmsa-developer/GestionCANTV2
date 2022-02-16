<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Pagos de Curso<s/title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:80%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Pagos de Cursos</h1>
                    </td>
                    <td colspan="4" style="width:20%; text-align:right;">
                        <img src="img/academiacreativa.png" style="width:80%; height:auto;">
                    </td>
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
            <div style="display: inline; width:10%; padding-right:2px;">
                <b>Fecha</b>
            </div>
            <div style="display: inline; width:13%; padding-right:2px;">
                <b>Pago Total</b>
            </div>
            <div style="display: inline; width:13%; padding-right:2px;">
                <b>Abono</b>
            </div>
            <div style="display: inline; width:12%; padding-right:2px;">
                <b>Tipo de Pago</b>
            </div>
            <div style="display: inline; width:13%; padding-right:2px;">
                <b>Nro Comprobante</b>
            </div>
            <div style="display: inline; width:18%; padding-right:2px;">
                <b>Curso</b>
            </div>
            <div style="display: inline; width:20%; padding-right:2px;">
                <b>Participante</b>
            </div>
        </div>
        <?php foreach ($pagos as $pago) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:10%; padding-right:2px;">
                    <?= $pago->fecha ?>
                </div>
                <div style="display: inline; width:13%; padding-right:2px;">
                    <?= $pago->pago_total ?>
                </div>
                <div style="display: inline; width:13%; padding-right:2px;">
                    <?= $pago->abono ?>
                </div>
                <div style="display: inline; width:12%; padding-right:2px;">
                    <?= $pago->tipo ?>
                </div>
                <div style="display: inline; width:13%; padding-right:2px;">
                    <?= $pago->nro_comprobante ?>
                </div>
                <div style="display: inline; width:18%; padding-right:2px;">
                    <?= $pago->curso ?>
                </div>
                <div style="display: inline; width:20%; padding-right:2px;">
                    <?= $pago->participante ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Pagos de Cursos: </b><?= count($pagos) ?></p>
    </div>
</body>

</html>