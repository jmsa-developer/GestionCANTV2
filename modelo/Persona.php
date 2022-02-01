<?php
require_once "BD.php";

class Persona extends BD{
    
    protected $id;
    protected $cedula;
    protected $nombre;
    protected $apellido;
    protected $direccion;
    protected $telefono;
    protected $email;
    protected $fecha_nacimiento;
    protected $estado;

    public function __construct(){
    }
        
    public function getId(){
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getCedula() {
        return $this->cedula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

}

