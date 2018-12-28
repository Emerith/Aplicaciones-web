<?php
namespace AppData\Controller;
class inicioController
{
    private $inicio;

    public function __construct()
        {
            $this->inicio= new \AppData\Model\inicio();
        }

    public function index()
        {
            $datos1=$this->inicio->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

}
