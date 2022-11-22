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

    public function logout()
    {
        session_destroy();
        header("Location: ?controlador=usuario&accion=login");
    }

    public function perfil()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $usuario = new Usuario();//Instanciar Usuario
            $usuario->setId($_POST['id']);//Adjuntarle los valores para sus atributos
            $usuario->setCedula($_POST['cedula']);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setUsuario($_POST['usuario']);
            $usuario->setEmail($_POST['correo']);
            $usuario->setRol($_POST['rol']);
            if ($_POST['password'] != "") {
                $usuario->setClave($_POST['password']);
            }
            $res = $usuario->modificar();
            if ($res) {
                $_SESSION['ac_usuario'] = $usuario->getUsuario();
                http_response_code(200);

                echo json_encode([
                    'titulo' => 'Registro Modificado',
                    'mensaje' => 'Su Perfil de Usuario ha sido modificado exitosamente',
                    'tipo' => 'success'
                ]);
            } else {
                echo json_encode([
                    'titulo' => 'Error',
                    'mensaje' => $usuario->getError(),
                    'tipo' => 'error'
                ]);
            }
        } else {

            $user = new Usuario();//Instanciar clase Usuario
            $user->setId($_SESSION['ac_id']);
            $usuario = $user->consultar();
            $this->render("perfil.php", ["usuario" => $usuario]);


        }
    }

}



