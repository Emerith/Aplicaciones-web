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
        $datos1=$this->persona->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear()
    {
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
    public function eliminar($id)
    {
        $this->persona->delete($id[0]);
        $datos1=$this->persona->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->persona->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->persona->set("id_persona",$id[0]);
            $this->persona->set('Nombre',$_POST["Nombre"]);
            $this->persona->set('Apellido_patern',$_POST["Apellido_patern"]);
            $this->persona->set('Apellido_matern',$_POST["Apellido_matern"]);
            $this->persona->set('email',$_POST["email"]);
            $this->persona->set('pass',$_POST["pass"]);
            $this->persona->update();
            $datos1=$this->persona->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}