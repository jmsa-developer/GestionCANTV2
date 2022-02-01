<?php
require_once "Persona.php";
class Cliente extends Persona{

    public function __construct(){
    }

    public function getClave(){
        return $this->clave;
    }
    public function setClave($clave){
        $this->clave = $clave;
    }

    public function getRol(){
        return $this->rol;
    }
    public function setRol($rol){
        $this->rol = $rol;
    }

    public function listar(){
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, cedula, CONCAT(nombre," ",apellido) as nombre, usuario, rol, estado
              FROM clientes');
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }
    public function consultar(){
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM clientes WHERE id = $this->id");
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }
    public function registrar(){
        try{
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

        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }
    public function modificar(){
        try{
            parent::connect();
            if($this->clave == ""){
                $consulta = $this->prepare("UPDATE usuarios SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    usuario = :usuario, email = :email WHERE id = :id");
            }
            else{
                $consulta = $this->prepare("UPDATE usuarios SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    usuario = :usuario, email = :email, clave = :clave WHERE id = :id");
                $consulta->bindParam(":clave", $this->clave);
            }
            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":usuario", $this->usuario);
            $consulta->bindParam(":email", $this->email);
            return $consulta->execute();

        } catch(Exception $ex){
            var_dump($ex);
            // $this->error = $ex->errorInfo[2];
            return false;
        }
    }
    
    public function inactivar(){
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE usuarios SET estado = 0 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }

    public function activar(){
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE usuarios SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }

    public function buscarUsuario($usuario){
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM usuarios WHERE (usuario = :usuario OR email = :usuario) AND estado = 1");
            $consulta->bindParam(":usuario", $usuario);
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }



}