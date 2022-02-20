<?php

class BD extends PDO
{
    private $driver = 'mysql';
    private $host = 'localhost';
    private $dbname = 'academiacreativa';
    private $user = 'root';
    private $password = 'informatica';
    private $charset = 'utf8';
    protected $error;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        try {
            $conexion = parent::__construct(
                "$this->driver:host=$this->host; dbname=$this->dbname;charset=$this->charset",
                $this->user,
                $this->password
            );
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function getError()
    {
        return $this->error;
    }
    public function setError($error)
    {
        $this->error = $error;
    }
}
