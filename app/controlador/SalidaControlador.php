<?php

namespace App\controlador;

use App\modelo\Usuario;

class SalidaControlador extends BaseControlador
{
    public function consultar(){

        $this->render('salida.php');

    }
}



