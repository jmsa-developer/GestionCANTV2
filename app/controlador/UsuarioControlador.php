<?php

namespace App\controlador;

use App\modelo\Usuario;

class UsuarioControlador extends BaseControlador
{

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $usuario = new Usuario(); //Instanciar Usuario

            $res = $usuario->buscarUsuario($_POST['usuario']);
            if ($res) {
                if ($_POST['clave'] == $res->clave) {
                    $_SESSION['ac_id'] = $res->id;
                    $_SESSION['ac_usuario'] = $res->usuario;
                    $_SESSION['ac_rol'] = $res->rol;
                    echo json_encode([
                        'titulo' => '', 'mensaje' => '',
                        'tipo' => 'success'
                    ]);
                } else {
                    echo json_encode([
                        'titulo' => 'Error',
                        'mensaje' => 'Contraseña errónea',
                        'tipo' => 'error'
                    ]);
                }
            } else {
                echo json_encode([
                    'titulo' => 'Error',
                    'mensaje' => 'El Usuario no se encuentra registrado',
                    'tipo' => 'error'
                ]);
            }
        } else {

            $this->render("login.php");


        }


    }

    public function logout(){
        session_destroy();
        header("Location: ?controlador=usuario&accion=login");
    }

}



