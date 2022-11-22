<?php

namespace App\controlador;

use App\modelo\Usuario;

class AppControlador extends BaseControlador
{

    public function index()
    {

        $this->render('inicio.php');

    }


}



