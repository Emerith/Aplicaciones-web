<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 16/10/2018
 * Time: 07:32 PM
 */

namespace AppData\Model;


class Formato
{
    private $tabla = "persona";
    private $Nombre;
    private $Apellido_patern;
    private $Apellido_matern;
    private $email;
    private $pass;

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
        $sql = "insert into {$this->tabla} values('0','{$this->Nombre}',
         '{$this->Apellido_patern}','{$this->Apellido_matern}','{$this->email}','{$this->pass}')";
        $this->conexion->QuerySimple($sql);
    }

}