<!-- Page Content -->
<div class="container">
<br><br><br>
    <!-- Content Row -->
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
    <!-- /.row -->

</div>
<!-- /.container -->