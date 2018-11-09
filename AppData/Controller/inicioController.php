<?php

namespace AppData\Controller;


class inicioController
{
    private $eventos;

public function __construct()
{
    $this->eventos= new \AppData\Model\InicioClient();
}

public function index()
{
    $datos1=$this->eventos->getAll();
    $datos[0]=$datos1;
    return $datos;
}

}