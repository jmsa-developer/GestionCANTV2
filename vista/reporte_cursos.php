<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Cursos</title>
</head>

<body>
    <div style="width: 100%; font-size:12px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td colspan="4" style="width:100%;">
                        <h1 style="text-align:center; margin-top:auto;">Reporte de Cursos</h1>
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
            <div style="display: inline; width:25%; padding-right:2px;">
                <b>Curso</b>
            </div>
            <div style="display: inline; width:27%; padding-right:2px;">
                <b>Intructor</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Fecha</b>
            </div>
            <div style="display: inline; width:15%; padding-right:2px;">
                <b>Duración</b>
            </div>
            <div style="display: inline; width:17.5%; padding-right:2px;">
                <b>Costo</b>
            </div>
        </div>
        <?php foreach ($cursos as $curso) : ?>
            <hr style="color: #E0E0E0;" />
            <div style="margin:3px 0px;">
                <div style="display: inline; width:25%; padding-right:2px;">
                    <?= $curso->nombre ?>
                </div>
                <div style="display: inline; width:27%; padding-right:2px;">
                    <?= $curso->instructor ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $curso->fecha ?>
                </div>
                <div style="display: inline; width:15%; padding-right:2px;">
                    <?= $curso->duracion ?>
                </div>
                <div style="display: inline; width:17.5%; padding-right:2px;">
                    <?= $curso->costo ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr style="color: #BDBDBD;" />
        <p><b>Total de Cursos: </b><?= count($cursos) ?></p>
    </div>
</body>

</html>