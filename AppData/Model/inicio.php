<?php
namespace AppData\Model;
class inicio
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
                                date_format(fecha,'%d-%m-%Y')AS fecha,date_format(Fecha_fin,'%d-%m-%Y') As Fecha_fin, Horario, img
                                FROM eventos ORDER BY Nombre";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

}