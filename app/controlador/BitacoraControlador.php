<?php

namespace App\controlador;

use App\modelo\Usuario;

class BitacoraControlador extends BaseControlador
{

    public function consultar(){

    $this->render('bitacora.php');
  }
}
