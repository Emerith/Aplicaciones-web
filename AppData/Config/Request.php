<?php
namespace AppData\Config;


use AppData\Model\login;

class Request
{
    private $controlador;
    private $metodo;
    private $argumento;
//    private $log=URL.Login;
    public function __construct()
    {
        if (isset($_SESSION["username"]))
        {
            if (isset($_GET['url'])) {
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);
                $ruta = array_filter($ruta);
                //print_r($ruta); //sirve para imprimir arreglos
            }
      }
      else
          if (isset($_GET['url'])?stristr($_GET['url'],'login'):false)
        {
                $this->metodo = "index";
        }
        else
        {
            $this->controlador="inicio";
            $this->metodo = "index";
        }
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