<?php

namespace App\controlador;

use App\modelo\Usuario;

class EmpleadoControlador extends BaseControlador
{
    public function consultar(){

        $this->render('ver_empleados.php');

    }
    public function registrar(){

        $this->render('registro_empleados.php');

    }

}


