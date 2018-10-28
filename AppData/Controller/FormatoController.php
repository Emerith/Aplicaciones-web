<?php

namespace AppData\Controller;


class FormatoController
{
    private $persona;

    public function __construct()
    {
        $this->persona= new \AppData\Model\Formato();

    }

    public function index()
    {

    }
    public function crear(){
        if($_POST)
        {
            $this->persona->set('Nombre',$_POST["Nombre"]);
            $this->persona->set('Apellido_patern',$_POST["Apellido_patern"]);
            $this->persona->set('Apellido_matern',$_POST["Apellido_matern"]);
            $this->persona->set('email',$_POST["email"]);
            $this->persona->set('pass',$_POST["pass"]);

            $this->persona->add();
            $datos1=$this->persona->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

}