<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 12:56 PM
 */

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
                if ($ruta[0] == "index.php") {
                    $this->controlador = "empleado_bienvenido";
                } else {
                    $this->controlador = strtolower(array_shift($ruta));
                }
                $this->metodo = strtolower(array_shift($ruta));
                if (!$this->metodo)
                    $this->metodo = "index";
                $this->argumento = $ruta;
            }else {
                $this->controlador = "empleado_bienvenido";
                $this->metodo = "index";
            }
        }
      else
          if (isset($_GET['url'])?stristr($_GET['url'],'login'):false)
        {
            $this->controlador="login";


            if(isset($_POST["email"]))

                $this->metodo = "verify";

            else
                $this->metodo = "index";
        }
        else if (isset($_GET['url'])?stristr($_GET['url'],'Civicos'):false)
        {
            $this->controlador="Civicos";
            $this->metodo=stristr($_GET['url'],'consulta')?"consulta":"index";
        }

        else if (isset($_GET['url'])?stristr($_GET['url'],'Deportivos'):false)
        {
            $this->controlador="Deportivos";
            $this->metodo=stristr($_GET['url'],'consulta')?"consulta":"index";
        }

        else if (isset($_GET['url'])?stristr($_GET['url'],'Culturales'):false)
        {
            $this->controlador="Culturales";
            $this->metodo=stristr($_GET['url'],'consulta')?"consulta":"index";
        }

        else if (isset($_GET['url'])?stristr($_GET['url'],'Proximamente'):false)
        {
            $this->controlador="Proximamente";
            $this->metodo=stristr($_GET['url'],'consulta')?"consulta":"index";
        }

        else if (isset($_GET['url'])?stristr($_GET['url'],'Formato'):false)
        {
            $this->controlador="Formato";
            $this->metodo=stristr($_GET['url'],'consulta')?"consulta":"index";
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