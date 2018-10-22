<?php

namespace AppData\Controller;


class FormatoController
{
    private $prueba;

    public function __construct()
    {
        $this->prueba= new \AppData\Model\Formato();

    }

    public function index()
    {

    }
    public function crear(){
        if($_POST)
        {
            $this->prueba->set('Nombre',$_POST["Nombre"]);


            $this->prueba->add();
            $datos1=$this->prueba->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}