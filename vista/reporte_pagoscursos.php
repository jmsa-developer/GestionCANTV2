<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Citas</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:80%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Citas</h1>
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
            <div style="display: inline; width:25%; padding-right:2px;">
                <b>Servicio</b>
            </div>
            <div style="display: inline; width:27%; padding-right:2px;">
                <b>Cliente</b>
            </div>
            <div style="display: inline; width:17%; padding-right:2px;">
                <b>Fecha</b>
            </div>
            <div style="display: inline; width:16%; padding-right:2px;">
                <b>Hora</b>
            </div>
            <div style="display: inline; width:8%; padding-right:2px;">
                <b>Realizada</b>
            </div>
        </div>
        <?php foreach ($citas as $cita) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:25%; padding-right:2px;">
                    <?= $cita->servicio ?>
                </div>
                <div style="display: inline; width:27%; padding-right:2px;">
                    <?= $cita->cliente ?>
                </div>
                <div style="display: inline; width:17%; padding-right:2px;">
                    <?= $cita->fecha ?>
                </div>
                <div style="display: inline; width:16%; padding-right:2px;">
                    <?= $cita->hora ?>
                </div>
                <div style="display: inline; width:8%; padding-right:2px;">
                    <?php 
                        if($cita->cita_realizada){
                            echo "Sí";
                        }
                        else{
                            echo "No";
                        }
                    ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Citas: </b><?= count($citas) ?></p>
    </div>
</body>

</html>