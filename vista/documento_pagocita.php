<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Factura de Servicio</title>
</head>

<body>
    <div class="" style="width: 98%; background-image: url(img/academiacreativa.png); 
        background-size:100%; background-repeat:no-repeat;">

        <h1 style="text-align:center; width:60%;">Factura de Servicio</h1>
        <h3><b>Cliente</b></h3>
        <table style="width:100%; margin: 0px 10px;">
            <tbody>
                <tr>
                    <td style="width:45%; padding-right: 5px;">
                        <b>Nombre Completo: </b> <?= $cliente->nombre ?> <?= $cliente->apellido ?>
                    </td>
                    <td style="width:50%; padding-right: 5px;">
                        <b>Cédula:</b> <?= $cliente->cedula ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Teléfono: </b> <?= $cliente->telefono ?>
                    </td>
                    <td>
                        <b>Dirección:</b> <?= $cliente->direccion ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3><b>Servicio</b></h3>
        <table style="width:100%; margin: 0px 10px;">
            <tbody>
                <tr>
                    <td style="width:45%; padding-right: 5px;">
                        <b>Nombre: </b> <?= $servicio->nombre ?>
                    </td>
                    <td style="width:50%; padding-right: 5px;">
                        <b>Descripción:</b> <?= $servicio->descripcion ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Fecha de la Cita:</b> <?= $cita->fecha ?> - <?= $cita->hora ?>
                    </td>
                    <td>
                        <b>Costo: </b> <?= $servicio->costo ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3><b>Datos del Pago</b></h3>
        <table style="width:100%; margin: 0px 10px;">
            <tbody>
                <tr>
                    <td style="width:45%; padding-right: 5px;">
                        <b>Tipo: </b> <?= $pago->tipo ?>
                    </td>
                    <td style="width:50%; padding-right: 5px;">
                        <b>Monto:</b> <?= $pago->pago_total ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Fecha:</b> <?= $pago->fecha ?> - <?= $pago->hora ?>
                    </td>
                    <td>
                        <b>Descripción: </b> <?= $pago->descripcion ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr style="color: #BDBDBD;" />

    </div>
</body>

</html>