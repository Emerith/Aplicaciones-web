<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 11/05/2018
 * Time: 07:32 AM
 */

namespace AppData\Config;


class Enrutador
{
    public static function run(Request $request)
    {
        $controlador = $request->getControlador() . "Controller";
        $ruta = ROOT . "AppData" . DS . "Controller" . DS . $controlador . ".php";

    }
}