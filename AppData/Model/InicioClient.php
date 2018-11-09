<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/11/2018
 * Time: 11:06 PM
 */

namespace AppData\Model;


class InicioClient
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
        $sql = "select * from eventos ORDER BY Nombre";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllInicio()
    {
        $sql = "SELECT eventos.Nombre, eventos.descripcion, eventos.lugar, 				
                                eventos.fecha, eventos.Fecha_fin,eventos.Horario
                                FROM eventos ORDER BY Nombre";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}