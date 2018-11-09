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
        $sql = "SELECT Nombre,descripcion,lugar,date_format(fecha,'%d-%m-%Y')as fecha,date_format(Fecha_fin,'%d-%m-%Y')as Fecha_fin,Horario 
                from eventos where fecha>sysdate() ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllInicio()
    {
        $sql = "SELECT Nombre, descripcion, lugar, 				
                                date_format(fecha,'%d-%m-%Y') as fecha, date_format(Fecha_fin,'%d-%m-%Y')as Fecha_fin, Horario
                                FROM eventos where fecha > sysdate() ORDER BY fecha";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}