<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 06/11/2018
 * Time: 10:25 PM
 */

namespace AppData\Controller;


class DeportivosClientController
{

    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\DeportivosClient();
    }

    public function index()
    {
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

}