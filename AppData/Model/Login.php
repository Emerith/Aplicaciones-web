<?php
namespace AppData\Model;
class Login
{
    private $tabla="persona";
    private $email, $pass;
    public function __construct()
    {
        $this->conexion= new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getAll()
    {
        $sql="SELECT * from persona";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    public function comprobar()
    {
        $sql="SELECT * FROM {$this->tabla} where email='{$this->email}' and pass='{$this->pass}'";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }


}