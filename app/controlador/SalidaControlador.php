<?php

namespace App\controlador;

use App\modelo\Usuario;

class SalidaControlador extends BaseControlador
{
    public function consultar(){

        $this->render('salida.php');

    }
    public function registrar(){

        $this->render('salida.php');

        if ($_POST) {
            $salida = new salida();
            $salida->setFecha($_POST['fecha']);
            $salida->setHora($_POST['hora']);
            $salida->setid_portador($_POST['cliente_id']);
            $salida->setDireccionOrigen($_POST['servicio_id']);
            if ($salidaa->registrar()) {
                echo json_encode([
                    'titulo' => 'Registro exitoso',
                    'mensaje' => 'El Registro fue realizado correctamente',
                    'tipo' => 'success'
                ]);
            } else {
                echo json_encode([
                    'titulo' => 'Error',
                    'mensaje' => $salida->getError(),
                    'tipo' => 'error'
                ]);
            }
            return;
        }


        $supervisores = Usuario::obtener_administradores();
        $centrales = Central::obtener_centrales();
        //TODO generar consulta de empleados
        $empleados = $supervisores;

        $this->render('entrada.php',
            [
                'supervisores' => $supervisores,
                'centrales' => $centrales,
                'empleados' => $empleados
            ]);
    }

}






