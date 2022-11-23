<?php

namespace App\controlador;

use App\modelo\Usuario;

class UsuarioControlador extends BaseControlador
{
    public function consultar(){

        $this->render('registro_usuario.php');

    }
}
