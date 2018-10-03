<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 02/10/2018
 * Time: 09:39 PM
 */

namespace AppData\Controller;


class ProximamenteController
{
    private $login;
    public function __construct()
    {
        $this->login= new \AppData\Model\Proximamente();
    }
}