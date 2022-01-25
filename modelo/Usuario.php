<?php
require_once "Persona.php";
class Usuario extends Persona{

    protected $usuario;
    protected $clave;
    protected $rol;

    public function __construct(){
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
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
            $consulta = $this->prepare('SELECT id, usuario, CONCAT(nombre," ",apellido) as nombre, cedula, rol, estatus
              FROM usuarios');
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
            $consulta = $this->prepare("SELECT * FROM usuarios WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO usuarios(cedula, nombre, apellido, usuario, email, clave, rol)" 
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

        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }
    public function actualizar(){
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
    
    public function deshabilitar(){
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE usuarios SET estatus = 'INACTIVO' WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }

    public function habilitar(){
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE usuarios SET estatus = 'ACTIVO' WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch(Exception $ex){
            $this->error = $ex->errorInfo[2];
            return false;
        }
    }



}