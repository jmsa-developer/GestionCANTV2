<?php
require_once "Persona.php";
class Cliente extends Persona
{

    public function __construct()
    {
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

    public function listar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, cedula, CONCAT(nombre," ",apellido) as nombre, telefono, direccion, estado
              FROM clientes');
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function consultar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM clientes WHERE id = $this->id");
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function registrar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("INSERT INTO clientes(cedula, nombre, apellido, email, 
                telefono, direccion, fecha_nacimiento)"
                . "VALUES (:cedula, :nombre, :apellido, :email, :telefono, :direccion, :fecha_nacimiento)");

            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":telefono", $this->telefono);
            $consulta->bindParam(":direccion", $this->direccion);
            $consulta->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);
            $consulta->execute();
            return $this->lastInsertId();
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function modificar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE clientes SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    telefono = :telefono, email = :email, direccion = :direccion, 
                    fecha_nacimiento = :fecha_nacimiento WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":telefono", $this->telefono);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":direccion", $this->direccion);
            $consulta->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);
            return $consulta->execute();
        } catch (Exception $e) {
            var_dump($e);
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function inactivar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE clientes SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE clientes SET estado = 1 WHERE id = $this->id");
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
            $consulta = $this->prepare("SELECT * FROM usuarios WHERE (usuario = :usuario OR email = :usuario) AND estado = 1");
            $consulta->bindParam(":usuario", $usuario);
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
}
