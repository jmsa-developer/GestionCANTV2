<?php

namespace App\controlador;

use App\modelo\Central;
use App\modelo\entrada;
use App\modelo\Rol;
use App\modelo\Usuario;

class EntradaControlador extends BaseControlador
{

    public function consultar()
    {

        $this->render('consultar_entrada.php');
    }

    public function registrar()
    {

        if ($_POST) {
            $entrada = new Entrada();
            $entrada->setFecha($_POST['fecha']);
            $entrada->setHora($_POST['hora']);
            $entrada->setid_portador($_POST['cliente_id']);
            $entrada->setDireccionOrigen($_POST['servicio_id']);
            if ($entrada->registrar()) {
                echo json_encode([
                    'titulo' => 'Registro exitoso',
                    'mensaje' => 'El Registro fue realizado correctamente',
                    'tipo' => 'success'
                ]);
            } else {
                echo json_encode([
                    'titulo' => 'Error',
                    'mensaje' => $entrada->getError(),
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





