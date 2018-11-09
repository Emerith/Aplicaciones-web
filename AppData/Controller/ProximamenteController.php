<?php


namespace AppData\Controller;


class ProximamenteController
{

    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\Proximamente();
    }

    public function index()
    {
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

}