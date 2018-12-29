<div class="row justify-content-md-center">
    <h2>Bienvenido </h2>
</div>
<div class="row justify-content-md-center">
    <h3>	<?php echo $_SESSION["email"] ?> </h3>

</div>

<br>
<div class="row">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <form class="card-title">
                    <input id="myInput" onkeyup="myFunction()" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar por nombre" aria-label="Search">
                </form>
                <p class="card-text">
                <table class="table" id="myTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoría</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once ("tabla.php");
                    ?>
                    </tbody>
                </table>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">Datos de los eventos</h5>
                <p class="card-text <?php echo URL?>Empleado_bienvenido/graficar">

                </p>
                <a href="#!" id="graficar_habitaciones" class="btn btn-primary btn-circle">Gráfica</a>
                <a class="btn" style="background: white;" disabled="true"></a>
                <a href="<?php echo URL?>Empleado_bienvenido/print_pdf" target="_blank" class="btn btn-primary">Reporte</a>
            </div>
        </div>
    </div>
</div>

<br>
<br>
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


<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>


