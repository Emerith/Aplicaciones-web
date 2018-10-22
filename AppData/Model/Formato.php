<?php


namespace AppData\Model;


class Formato
{
    private $tabla = "prueba";
    private $Nombre;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql = "insert into {$this->tabla} values('0','{$this->Nombre}')";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_persona='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


    function verify()
    {
        $sql = "select * from {$this->tabla} where email='{$this->email}'";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }


}