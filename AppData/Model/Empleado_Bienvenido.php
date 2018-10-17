<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 14/06/2018
 * Time: 09:13 PM
 */

namespace AppData\Model;


class Empleado_Bienvenido
{
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

    function add(){

    }

    function delete($id)
    {

    }

    function getAll()
    {
    }

    function getOne($id)
    {
    }
    function update()
    {
    }
    function verify(){

    }

}