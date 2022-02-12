<?php
require_once "Persona.php";
class Empleado extends Persona
{
    private $fecha_contrato;
    private $horario;
    private $rol;

    public function __construct()
    {
    }

    public function getFecha_contrato(){
        return $this->fecha_contrato;
    }
    public function setFecha_contrato($fecha_contrato){
        $this->fecha_contrato = $fecha_contrato;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function setHorario($horario){
        $this->horario = $horario;
    }
    public function getRol(){
        return $this->rol;
    }
    public function setRol($rol){
        $this->rol = $rol;
    }

    public function listar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, cedula, CONCAT(nombre," ",apellido) as nombre, telefono, horario, rol, estado
              FROM empleados');
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function listarActivos()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, cedula, CONCAT(nombre," ",apellido) as nombre
              FROM empleados WHERE estado = 1');
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
            $consulta = $this->prepare("SELECT * FROM empleados WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO empleados(cedula, nombre, apellido, email, 
                telefono, direccion, fecha_nacimiento, fecha_contrato, horario, rol)"
                . "VALUES (:cedula, :nombre, :apellido, :email, :telefono, :direccion, 
                :fecha_nacimiento, :fecha_contrato, :horario, :rol)");

            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":telefono", $this->telefono);
            $consulta->bindParam(":direccion", $this->direccion);
            $consulta->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);
            $consulta->bindParam(":fecha_contrato", $this->fecha_contrato);
            $consulta->bindParam(":horario", $this->horario);
            $consulta->bindParam(":rol", $this->rol);
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
            $consulta = $this->prepare("UPDATE empleados SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    telefono = :telefono, email = :email, direccion = :direccion, 
                    fecha_nacimiento = :fecha_nacimiento,  fecha_contrato = :fecha_contrato, 
                    horario = :horario, rol = :rol
                    WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":telefono", $this->telefono);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":direccion", $this->direccion);
            $consulta->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);
            $consulta->bindParam(":fecha_contrato", $this->fecha_contrato);
            $consulta->bindParam(":horario", $this->horario);
            $consulta->bindParam(":rol", $this->rol);
            return $consulta->execute();
        } catch (Exception $e) {
            // var_dump($e);
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function inactivar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE empleados SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE empleados SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
