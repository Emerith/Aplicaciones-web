<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <h1>Cívicos</h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item ">
                </li>
                <li class="nav-item">
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <h6>Número de visitas:
                    <?php
                    echo contador1();
                    ?>
                </h6>
            </form>
        </div>
    </nav>
</div>

<br>

<div class="container" >
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
                <p>Hora: <?php echo $row['Horario']?></p>
            </div>
        </div>
        <br>
    <?php } ?>
</div>
<br>
<br>
<br>

<?php
function contador1()
{
    $archivo = "Views/CivicosClient/contador1.txt";
    $f = fopen($archivo, "r");
    if($f)
    {
        $contador1 = fread($f, filesize($archivo));
        $contador1 = $contador1 + 1;
        fclose($f);
    }
    $f = fopen($archivo, "w+");
    if($f)
    {
        fwrite($f, $contador1);
        fclose($f);
    }
    return $contador1;
}
?>
