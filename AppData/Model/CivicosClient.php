<?php


namespace AppData\Model;


class CivicosClient
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
        $sql = "select Nombre, descripcion, lugar, 				
                                date_format(fecha,'%d-%m-%Y')AS fecha, date_format(Fecha_fin,'%d-%m-%Y')AS Fecha_fin,Horario
                                FROM eventos
                                WHERE eventos.id_categoria='230'  ORDER BY fecha DESC ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllCivicos()
    {
        $sql = "SELECT eventos.Nombre, eventos.descripcion, eventos.lugar, 				
                                eventos.fecha, eventos.Fecha_fin,eventos.Horario
                                FROM eventos
                                WHERE eventos.id_categoria='230' ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}