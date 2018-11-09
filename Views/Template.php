<?php
namespace Views;
use http\Url;
class Template
{
    public static function header()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>

            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap core CSS -->
            <link type="text/css" href="<?php echo URL?>Public/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link type="text/css" href="<?php echo URL?>Public/css/shop-homepage.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/empleado.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/login.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/style3.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/formato.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/sweetalert.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/boostrap.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/glyphicons.css" rel="stylesheet">

            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="<?php echo URL?>Public/js/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/sweetalert.min.js"></script>

        </head>

        <body>


        <nav id="menusito">
            <?php if(!isset($_SESSION["username"]))
            {?>
                <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL?>inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL?>Proximamente">Próximamente</a>
                                </li>
                                <li class="nav-item">
                                    <input class="form-control" type="search" placeholder="Buscar">
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php }?>
        </nav>

        <?php
        if (isset($_SESSION["username"]))
        {
            ?>
            <main>
                <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
                    <ul class="navbar-nav px-3">
                        <li class="nav-item text-nowrap">
                            <a class="nav-link " href="#menu-toggle" id="menu-toggle">Menu
                            </a>
                        </li>
                    </ul>
                </nav>

                <div id="wrapper">
                    <div id="sidebar-wrapper" >
                        <ul class="sidebar-nav">

                            <li class="sidebar-brand">
                                <a href="<?php echo URL?>Empleado_bienvenido">Inicio</a>
                            </li>

                            <li>
                               <a href="<?php echo URL?>Culturales">Culturales</a>
                            </li>

                            <li>
                                <a href="<?php echo URL?>Civicos">Civicos</a>
                            </li>

                            <li>
                              <a href="<?php echo URL?>Deportivos">Deportivos</a>
                            </li>

                            <li>
                               <a href="<?php echo URL?>login/logout">Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>

           <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>

     <?php
    }?>


    <?php
    }
    public static function footer()
    {
        ?>
        <footer class="py-5 bg-success">
            <div class="container">
                <p class="m-0 text-left text-white">Dirección: Km 30 de la Carretera Federal Monumento - Valle de Bravo, Ejido de San Antonio de la Laguna, Valle de Bravo </p>
                <p class="m-0 text-left text-white">Tel: 01 726 266 50 77</p>
                <p class="m-0 text-left text-white">E-mail: direcciontesvalle@gmail.com</p>
                <a class="nav-link" href="<?php echo URL?>login">.</a>
            </div>
        </footer>
        </body>
        </html>
        <?php
    }
}