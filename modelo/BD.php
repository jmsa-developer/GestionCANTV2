<?php

class BD extends PDO{
    private $driver = 'mysql';
    private $host = 'localhost';
    private $dbname = 'madreteresa';
    private $user = 'root';
    private $password = 'informatica';
    protected $error;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        $conn = parent::__construct("$this->driver:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->exec("SET CHARACTER SET utf8;");//Para poder enviar caracteres especiales UTF8 a la DB. Está sentencia no es válida en todos los gestores de DB
        return $conn;
    }

    public function getError() {
        return $this->error;
    }
    public function setError($error) {
        $this->error = $error;
    }
}
