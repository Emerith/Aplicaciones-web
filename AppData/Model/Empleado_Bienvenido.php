<?php


namespace AppData\Model;


class Empleado_Bienvenido
{
    private $tabla="persona";
    private  $id_persona;
    private  $Nombre;
    private  $Apellido_patern;
    private  $Apellido_matern;
    private  $email;
    private  $pass;
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
    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->Nombre}','{$this->Apellido_patern}','{$this->Apellido_matern}',
        '{$this->email}','{$this->pass}')";
        $this->conexion->QuerySimple($sql);
    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update {$this->tabla} set Nombre='{$this->Nombre}',Apellido_patern='{$this->Apellido_patern}', 
        Apellido_matern='{$this->Apellido_matern}',email='{$this->email}',pass='{$this->pass}'
         where id_persona='{$this->id_persona}'";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_persona='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_persona='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}