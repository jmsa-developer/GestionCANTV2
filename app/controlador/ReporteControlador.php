<?php

namespace App\controlador;

use App\modelo\Usuario;

class ReporteControlador extends BaseControlador
{
    public function consultar(){

        $this->render('reportes.php');
    }


}



