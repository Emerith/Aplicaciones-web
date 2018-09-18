<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 12:56 PM
 */

namespace AppData\Config;

class Request
{
    private $controlador;
    private $metodo;
    private $argumento;

    public function __construct()
    {

    }
    public function getControlador()
    {
        return $this->controlador;
    }
    public function getMetodo()
    {
        return $this->metodo;
    }
    public function getArgumento()
    {
        return $this->argumento;
    }
}