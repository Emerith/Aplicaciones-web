<?php

namespace Views;
new Template();
ob_start();
class Template
{
    public static function header()
    {
?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta charset="utf-8">
            <title>Valle de Bravo-Pueblo Mágico</title>

            <link type="text/css" href="<?php echo URL ?>Public/css/login.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/style3.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/sweet-alert.min.css">

            <link type="text/css" href="<?php echo URL ?>Public/css/glyphicons.css" rel="stylesheet">
            <script type="text/javascript" src="<?php echo URL ?>Public/js/sweet-alert.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/highcharts.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/jquery.validate.min.js"></script>
        </head>

        <body>
            
            <?php if(!isset($_SESSION["email"])) { ?>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>Proximamente">Próximamente</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL?>login" class="brand-logo"><img src="Public\img\logo.png" width="65px" height="50px"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

            <?php } if (isset($_SESSION["email"])){ ?>

            <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link " href="#menu-toggle" id="menu-toggle">Menu
                        </a>
                    </li>
                </ul>
            </nav>

            <div id="wrapper">
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">

                        <li class="sidebar-brand">
                            <a href="#"></a>
                        </li>

                        <li>
                            <a href="Empleado_bienvenido"> <?php echo $_SESSION["email"] ?></a>
                        </li>

                        <li>
                            <a href="<?php echo URL ?>Culturales">Culturales</a>
                        </li>

                        <li>
                            <a href="<?php echo URL ?>Civicos">Civicos</a>
                        </li>

                        <li>
                            <a href="<?php echo URL ?>Deportivos">Deportivos</a>
                        </li>

                        <li>
                            <a href="<?php echo URL ?>login/logout">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>

    <?php } ?>
            <main class="container-fluid">
            <br>
            <br>
            <br>

    <?php
    }

    public static function footer()
    {
    ?>
            </main>
        <footer class="py-5 bg-success">
            <div class="container">
                <p class="m-0 text-left text-white">Dirección: Km 30 de la Carretera Federal Monumento - Valle de Bravo,
                    Ejido de San Antonio de la Laguna, Valle de Bravo </p>
                <p class="m-0 text-left text-white">Teléfono: 01 726 266 50 77</p>
                <p class="m-0 text-left text-white">E-mail: valledebravo@pueblomagico.com</p>
            </div>
        </footer>
        </body>
        </html>
        <?php
    }
}
ob_start();