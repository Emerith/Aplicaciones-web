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
        $sql = "select * from eventos where id_categoria='232'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllDeportivos()
    {
        $sql = "SELECT eventos.Nombre, eventos.descripcion, eventos.lugar, 				
                                eventos.fecha, eventos.Fecha_fin,eventos.Horario
                                FROM eventos
                                WHERE eventos.id_categoria='232' ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}