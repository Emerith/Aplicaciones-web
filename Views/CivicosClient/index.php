<br>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <h1>Cívicos</h1>
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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="text" placeholder="Buscar" id="buscar">
            </form>
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

<script type="text/javascript">
    $(document).ready(function(){
        $("#buscar").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tabla ").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>