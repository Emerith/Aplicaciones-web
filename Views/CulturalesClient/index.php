<br>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <h1>Culturales</h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<br>

<div class="container" id="tabla">

    <?php
    $datos=$datos[0];
    $url=URL;
    while($row=mysqli_fetch_array($datos)) { ?>
        <div class="row">
            <div class="col-md-7">
                <a><img class="img-responsive center-block" width="640px" height="270px" src='data:image/jpg; base64, <?php echo base64_encode($row['img']) ?>'></a>
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
