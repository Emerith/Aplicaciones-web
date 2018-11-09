<?php


namespace AppData\Model;


class Proximamente
{

    private $tabla = "eventos";


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

    function getAll()
    {
        $sql = "select * from eventos ORDER BY fecha ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllInicio()
    {
        $sql = "SELECT eventos.Nombre, eventos.descripcion, eventos.lugar, 				
                                eventos.fecha, eventos.Fecha_fin,eventos.Horario
                                FROM eventos ORDER BY fecha ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}