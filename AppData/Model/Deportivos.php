<?php

namespace AppData\Model;


class Deportivos
{
    private $tabla="eventos";
    private  $id_evento;
    private  $Nombre;
    private  $descripcion;
    private  $lugar;
    private  $fecha;
    private  $Fecha_fin;
    private  $Horario;
    private  $img;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getAll()
    {
        $sql="select *from {$this->tabla} where id_categoria='232'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function add()
    {
        $stm=$this->conexion->proc($this->Nombre,$this->descripcion,232,$this->lugar,$this->fecha,$this->Fecha_fin,$this->Horario,$this->img);
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  Nombre='{$this->Nombre}' ";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_evento='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function edit($id)
    {
        $sql="select id_evento,Nombre,descripcion,lugar,fecha,Fecha_fin,Horario from {$this->tabla} where id_evento='{$id}'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM eventos where id_evento='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function getImg($id)
    {
        $sql="SELECT img FROM eventos where id_evento='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->proc2($this->Nombre,$this->descripcion,$this->lugar,$this->fecha,$this->Fecha_fin,$this->Horario,$this->img,$this->id_evento);
    }

}