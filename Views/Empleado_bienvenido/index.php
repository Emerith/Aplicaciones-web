<div class="row justify-content-md-center">
    <h2>Bienvenido </h2>
</div>
<div class="row justify-content-md-center">
    <h3>	<?php echo $_SESSION["email"] ?> </h3>

</div>
<br>
<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Página principal</h5>
                <p class="card-text">contador</p>
            </div>
        </div>
    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos Culturales</h5>
                <p class="card-text">contador</p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos Cívicos</h5>
                <p class="card-text">contador</p>
            </div>
        </div>
    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos Deportivos</h5>
                <p class="card-text">contador</p>
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-sm-5">

    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">Registro de Eventos</h5>
                <p class="card-text <?php echo URL?>Empleado_bienvenido/graficar">

                </p>
                <a href="<?php echo URL?>Empleado_bienvenido/print_pdf" target="_blank" class="btn btn-primary">Reporte</a>
                <a class="btn" style="background: white;" disabled="true"></a>
                <a href="#!" id="graficar_habitaciones" class="btn btn-primary btn-circle">Gráfica</a>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
    </div>
</div>
<br>

<div class="modal" tabindex="-1" role="dialog" id="modal_grafica">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gráfica de eventos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        $("#graficar_habitaciones").click(function(){
            $.get("<?php echo URL?>Empleado_bienvenido/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal('show');
            });
        });
    })
</script>


