<?php

namespace App\modelo;

use Exception;
use PDO;

class Usuario extends Persona
{

    protected $usuario;
    protected $clave;
    protected $rol;

    public function __construct()
    {
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function listar($condicion = "")
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, cedula, CONCAT(nombre," ",apellido) as nombre, usuario, rol_id, email, estado
              FROM usuario ' . $condicion);
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $ex) {
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }

    public function consultar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM usuario WHERE id = $this->id");
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $ex) {
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }

    public function registrar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("INSERT INTO usuario(cedula, nombre, apellido, usuario, email, clave, rol)"
                . "VALUES (:cedula, :nombre, :apellido, :usuario, :email, :clave, :rol)");

            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":usuario", $this->usuario);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":clave", $this->clave);
            $consulta->bindParam(":rol", $this->rol);
            $consulta->execute();
            return $this->lastInsertId();

        } catch (Exception $ex) {
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }

    public function modificar()
    {
        try {
            parent::connect();
            if ($this->clave == "") {
                $consulta = $this->prepare("UPDATE usuario SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    usuario = :usuario, email = :email, rol = :rol WHERE id = :id");
            } else {
                $consulta = $this->prepare("UPDATE usuario SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    usuario = :usuario, email = :email, rol = :rol, clave = :clave WHERE id = :id");
                $consulta->bindParam(":clave", $this->clave);
            }
            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":usuario", $this->usuario);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":rol", $this->rol);
            return $consulta->execute();

        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function inactivar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE usuario SET estado = 0 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function activar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE usuario SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function buscarUsuario($usuario)
    {
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM usuario WHERE (usuario = :usuario OR email = :usuario) AND estado = 1");
            $consulta->bindParam(":usuario", $usuario);
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);

            $consultaRol = $this->prepare('SELECT id, nombre FROM roles WHERE id = :id');
            $consultaRol->bindParam(":id", $respuesta->rol_id);
            $consultaRol->execute();
            $respuestaRol = $consultaRol->fetch(PDO::FETCH_OBJ);
            $respuesta->rol = $respuestaRol->nombre;

            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public static function obtener_administradores()
    {
        $usuario = new self();
        $rol = new Rol();
        $rol_administrador = $rol->consultar("WHERE nombre = 'Administrador'")->id;
        return $usuario->listar("WHERE rol_id = '$rol_administrador'");
    }

}