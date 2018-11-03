<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 02/11/2018
 * Time: 08:38 PM
 */

namespace AppData\Controller;


class CulturalesController
{

    private $eventos;
    public function __construct()
    {
        $this->eventos=new \AppData\Model\Culturales();
    }
    public function index()
    {
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->eventos->set('Nombre',$_POST["Nombre"]);
            $this->eventos->set('descripcion',$_POST["descripcion"]);
            $this->eventos->set('lugar',$_POST["lugar"]);
            $this->eventos->set('fecha',$_POST["fecha"]);
            $this->eventos->set('Fecha_fin',$_POST["Fecha_fin"]);
            $this->eventos->set('Horario',$_POST["Horario"]);

            $this->eventos->add();
            $datos1=$this->eventos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->eventos->delete($id[0]);
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->eventos->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->eventos->set("id_evento",$id[0]);
            $this->eventos->set('Nombre',$_POST["Nombre"]);
            $this->eventos->set('descripcion',$_POST["descripcion"]);
            $this->eventos->set('lugar',$_POST["lugar"]);
            $this->eventos->set('fecha',$_POST["fecha"]);
            $this->eventos->set('Fecha_fin',$_POST["Fecha_fin"]);
            $this->eventos->set('Horario',$_POST["Horario"]);

            $this->eventos->update();
            $datos1=$this->eventos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}