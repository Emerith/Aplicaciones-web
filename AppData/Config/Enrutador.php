<?php


namespace AppData\Config;


class Enrutador
{
    public static function run(Request $request)
    {
        $controlador = $request->getControlador() . "Controller";
        $ruta = ROOT . "AppData" . DS . "Controller" . DS . $controlador . ".php";

    }
}