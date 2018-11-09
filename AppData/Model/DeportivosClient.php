<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 06/11/2018
 * Time: 10:26 PM
 */

namespace AppData\Model;


class DeportivosClient
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
                                date_format(fecha,'%d-%m-%Y')As fecha, date_format(Fecha_fin,'%d-%m-%Y') AS Fecha_fin, Horario
                                from eventos where id_categoria='232' ORDER BY fecha DESC ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllDeportivos()
    {
        $sql = "SELECT Nombre, descripcion, lugar, 				
                                fecha, Fecha_fin, Horario
                                from eventos where id_categoria='232' ORDER BY fecha";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}