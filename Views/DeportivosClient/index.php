<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Deportivos
    </h1>
        <?php
        $datos=$datos[0];
        $url=URL;
        while($row=mysqli_fetch_array($datos)) { ?>

            <div class="row">
<div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>

 </div>

<div class="col-md-5">
       <h3><?php echo $row['Nombre'] ?></h3>
       <p><?php echo $row['descripcion']?></p>
       <p>Lugar: <?php echo $row['lugar']?></p>
       <p>De: <?php echo $row['fecha']?></p>
       <p>A: <?php echo $row['Fecha_fin']?></p>
       <p>Horario: <?php echo $row['Horario']?></p>
 </div>
    </div>
            <br>
       <?php } ?>


</div>

