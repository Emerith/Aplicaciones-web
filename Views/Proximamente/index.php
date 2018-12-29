<div class="container">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <h1></h1>
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
                        echo contador4();
                        ?>
                    </h6>
                </form>
            </div>
        </nav>
    </div>

    <br>

    <div class="row">
        <?php
        $datos=$datos[0];
        $url=URL;
        while($row=mysqli_fetch_array($datos)) { ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $row['Nombre'] ?></h2>
                    <p> <?php echo $row['descripcion']?></p>
                    <p >Lugar: <?php echo $row['lugar']?></p>
                    <p >De: <?php echo $row['fecha']?></p>
                    <p >A: <?php echo $row['Fecha_fin']?></p>
                    <p >Horario: <?php echo $row['Horario']?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>

<?php
function contador4()
{
    $archivo = "Views/Proximamente/contador4.txt";
    $f = fopen($archivo, "r");
    if($f)
    {
        $contador4 = fread($f, filesize($archivo));
        $contador4 = $contador4 + 1;
        fclose($f);
    }
    $f = fopen($archivo, "w+");
    if($f)
    {
        fwrite($f, $contador4);
        fclose($f);
    }
    return $contador4;
}
?>
