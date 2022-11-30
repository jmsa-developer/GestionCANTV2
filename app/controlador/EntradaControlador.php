<?php

namespace App\controlador;

use App\modelo\Usuario;

class EntradaControlador extends BaseControlador
{

    public function consultar(){

        $this->render('consultar_entrada.php');
    }
    public function registrar(){

        $this->render('entrada.php');

    }
   
}





