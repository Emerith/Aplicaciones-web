<?php


namespace AppData\Controller;


class DeportivosController
{
    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\Deportivos();
    }

    public function index()
    {

    }

}