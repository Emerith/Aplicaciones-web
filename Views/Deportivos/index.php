<div class="container">

    <!-- Introduction Row -->
    <h1 class="my-4" align="center">Eventos Deportivos
    </h1>
    <div class="row">
        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#agregar">+</button>
        <div class="col-lg-12">
            <br>
        </div>
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Fecha inicio</th>
                    <th scope="col">Fecha fin</th>
                    <th scope="col">Horario</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody id="body_table">
                <?php
                require_once ("tabla.php");
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="agregar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="save_dep">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id='Nombre' name="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lugar</label>
                        <input type="text" class="form-control" id='lugar' name="lugar">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha inicio</label>
                        <input type="date" class="form-control" id='fecha' name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha fin</label>
                        <input type="date" class="form-control" id='Fecha_fin' name="Fecha_fin">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora</label>
                        <input type="time" class="form-control" id='Horario' name="Horario">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" href="#!" id="save_dep_ok" data-dismiss="modal">Registrar</button>
                <button type="button" class="btn btn-success" href="#!" id="update_dep_ok" data-dismiss="modal">Actualizar</button>
                <script type="text/javascript">$("#update_dep_ok").hide();</script>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="modal_eliminar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Desea eliminar el registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" href="#!" id="eliminar_ok" data-dismiss="modal" >Aceptar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" href="#!">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#save_dep_ok").click(function() {
            $("#save_dep").submit();
            swal("Registro Exitoso")
        });
        $("#save_dep").validate({
            submitHandler:function(form){
                $.post("<?php echo URL?>Deportivos/crear",$("#save_dep").serialize(),function(res){
                    $('#save_dep').find('input, select, textarea').val('');
                    window.location.href="<?php echo URL?>Deportivos";
                })
            }
        });

        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Deportivos/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal('show');
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
            });
        });

        $("#body_table").on("click","a.btn_modificar",function(){
            $("#save_dep_ok").hide();
            $("#update_dep_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Deportivos/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_dep_ok").data("id",datos["id_evento"]);
                $("#Nombre").val(datos["Nombre"]);
                $("#descripcion").val(datos["descripcion"]);
                $("#lugar").val(datos["lugar"]);
                $("#fecha").val(datos["fecha"]);
                $("#Fecha_fin").val(datos["Fecha_fin"]);
                $("#Horario").val(datos["Horario"]);

                $("#agregar").modal('show');
            });
        });
        $("#update_dep_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Deportivos/actualizar/"+id,$("#save_dep").serialize(),function(res){
                $('#save_dep').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                swal("Actualización completa", " ", "success");
            })
        });

    });
</script>