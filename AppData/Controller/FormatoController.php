<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 16/10/2018
 * Time: 07:33 PM
 */

namespace AppData\Controller;


class FormatoController
{
    private $persona;

    public function __construct()
    {
        $this->persona=new \AppData\Model\Formato();
    }

    public function index()
    {

    }
    public function crear(){
        if($_POST)
        {
            $this->persona->set('Nombre',$_POST["Nombre"]);
            $this->persona->set('Apellido_patern',$_POST["Apellido_patern"]);
            $this->persona->set('Apellido_matern',$_POST["Apellido_patern"]);
            $this->persona->set('email',$_POST["email"]);
            $this->persona->set('pass',$_POST["pass"]);

            $this->persona->add();
        }
    }

}