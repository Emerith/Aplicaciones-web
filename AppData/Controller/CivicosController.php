<?php

namespace AppData\Controller;


class CivicosController
{
    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\Civicos();
    }

    public function index()
    {

    }

}