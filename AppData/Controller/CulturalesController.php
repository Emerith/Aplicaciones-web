<?php

namespace AppData\Controller;


class CulturalesController
{
    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\Culturales();
    }

    public function index()
    {

    }

}