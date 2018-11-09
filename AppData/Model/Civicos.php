<?php


namespace AppData\Model;


class Civicos
{

    private $tabla = "eventos";
    private $id_evento;
    private $Nombre;
    private $descripcion;
    private $lugar;
    private $fecha;
    private $Fecha_fin;
    private $Horario;
    private $id_categoria;

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
        $sql = "insert into {$this->tabla} values('0','{$this->Nombre}','{$this->descripcion}','230','{$this->lugar}',
        '{$this->fecha}','{$this->Fecha_fin}','{$this->Horario}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "select *from {$this->tabla} where id_categoria='230'";
        $datos = $this->conexion->queryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql = "update {$this->tabla} set Nombre='{$this->Nombre}',descripcion='{$this->descripcion}', 
        lugar='{$this->lugar}',fecha='{$this->fecha}',Fecha_fin='{$this->Fecha_fin}',Horario='{$this->Horario}'
         where id_evento='{$this->id_evento}'";
        $this->conexion->QuerySimple($sql);
    }

    function delete($id)
    {
        $sql = "delete from {$this->tabla} where id_evento='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_evento='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }
}