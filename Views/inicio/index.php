<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4" href="<?php echo URL?>login">Eventos
            </h1>
            <div class="list-group">
                <a href="<?php echo URL?>CulturalesClient"  class="list-group-item text-dark">Culturales</a>
                <a href="<?php echo URL?>CivicosClient" class="list-group-item text-dark">Civicos</a>
                <a href="<?php echo URL?>DeportivosClient" class="list-group-item text-dark">Deportivos</a>
            </div>
        </div>

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?php echo URL?>Public/img/valle1.png">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?php echo URL?>Public/img/valle2.png" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?php echo URL?>Public/img/valle3.png">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <table id="tabla">
            <div class="row">
                <?php
                $datos=$datos[0];
                $url=URL;
                while($row=mysqli_fetch_array($datos)) { ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a><img class="img-responsive center-block" width="253px" height="135px" src='data:image/jpg; base64, <?php echo base64_encode($row['img']) ?>'></a>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row['Nombre'] ?></h4>
                                <h5>De: <?php echo $row['fecha']?></h5>
                                <h5>A: <?php echo $row['Fecha_fin']?></h5>
                                <p class="card-text">Lugar: <?php echo $row['lugar']?></p>
                                <p class="card-text">Hora: <?php echo $row['Horario']?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            </table>
        </div
    </div>
</div>


