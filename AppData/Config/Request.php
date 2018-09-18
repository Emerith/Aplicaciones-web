<?php


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