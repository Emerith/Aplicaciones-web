<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/11/2018
 * Time: 11:00 PM
 */

namespace AppData\Controller;


class CulturalesClientController
{

    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\CulturalesClient();
    }

    public function index()
    {
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

}