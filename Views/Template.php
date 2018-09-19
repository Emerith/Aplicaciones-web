<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

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

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link type="text/css" href="<?php echo URL?>Public/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link type="text/css" href="<?php echo URL?>Public/css/shop-homepage.css" rel="stylesheet">


        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo URL?>Public/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo URL?>Public/js/bootstrap.bundle.min.js"></script>

    </head>

        <body>


        </body>

        <?php
    }
}