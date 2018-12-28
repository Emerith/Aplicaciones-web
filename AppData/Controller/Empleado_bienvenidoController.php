<?php


namespace AppData\Controller;


class Empleado_bienvenidoController
{
    private $persona;
    public function __construct()
    {
        $this->persona=new \AppData\Model\Empleado_Bienvenido();
    }
    public function index()
    {

    }
    public function print_pdf()
    {
        $datos=$this->persona->pdf();
        return $datos;
    }


    public function graficar()
    {
        $datos=$this->persona->graficar();
        return $datos;

    }
}