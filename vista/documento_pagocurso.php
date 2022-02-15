<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Factura de Cruso</title>
</head>

<body>
    <div class="" style="width: 98%; background-image: url(img/academiacreativa.png); 
        background-size:100%; background-repeat:no-repeat;">

        <h1 style="text-align:center;">Factura de Curso</h1>
        <h3><b>Participante</b></h3>
        <table style="width:100%; margin: 0px 10px;">
            <tbody>
                <tr>
                    <td style="width:45%; padding-right: 5px;">
                        <b>Nombre Completo: </b> <?= $participante->nombre ?> <?= $participante->apellido ?>
                    </td>
                    <td style="width:50%; padding-right: 5px;">
                        <b>Cédula:</b> <?= $participante->cedula ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Teléfono: </b> <?= $participante->telefono ?>
                    </td>
                    <td>
                        <b>Dirección:</b> <?= $participante->direccion ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3><b>Curso</b></h3>
        <table style="width:100%; margin: 0px 10px;">
            <tbody>
                <tr>
                    <td style="width:45%; padding-right: 5px;">
                        <b>Nombre: </b> <?= $curso->nombre ?>
                    </td>
                    <td style="width:50%; padding-right: 5px;">
                        <b>Descripción:</b> <?= $curso->descripcion ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Fecha del Curso:</b> <?= $curso->fecha ?> - <?= $curso->horario ?>
                    </td>
                    <td>
                        <b>Costo: </b> $<?= $curso->costo ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Instructor:</b> <?= $empleado->nombre ?> <?= $empleado->apellido ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3><b>Datos del Pago</b></h3>
        <table style="width:100%; margin: 0px 10px;">
            <tbody>
                <tr>
                    <td style="width:50%; padding-right: 5px;">
                        <b>Tipo: </b> <?= $pago->tipo ?>
                    </td>
                    <td style="width:45%; padding-right: 5px;">
                        <b>Abono:</b> $<?= $pago->abono ?>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <b>Fecha:</b> <?= $pago->fecha ?> - <?= $pago->hora ?>
                    </td>
                    <td>
                        <b>Pago Total:</b> $<?= $pago->pago_total ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Descripción: </b> <?= $pago->descripcion ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />

    </div>
</body>

</html>