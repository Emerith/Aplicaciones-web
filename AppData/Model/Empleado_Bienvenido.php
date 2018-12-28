<?php


namespace AppData\Model;


class Empleado_Bienvenido
{

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }

    function graficar()
    {
        $sql="SELECT categoria.descripcion,
              COUNT(categoria.descripcion) 
              FROM eventos,categoria where eventos.id_categoria=categoria.id_categoria 
              GROUP BY categoria.descripcion";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function pdf()
    {
        $sql="SELECT eventos.id_evento,eventos.Nombre,eventos.lugar,date_format(eventos.fecha,'%d-%m-%Y')AS fecha,date_format(eventos.Fecha_fin,'%d-%m-%Y')as Fecha_fin,eventos.Horario,categoria.descripcion 
              FROM eventos,categoria
              where eventos.id_categoria = categoria.id_categoria
              ORDER BY categoria.id_categoria";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

}