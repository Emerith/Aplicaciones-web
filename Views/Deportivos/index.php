<?php
?>
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Eventos Deportivos</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-primary btn-circle" href="<?php echo URL ?>Deportivos/agregar">+</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row" id="body_table">
                    <?php
                    require_once ("tabla.php");
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>

<div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="mimodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container justify-content-md-center col-md-12 order-md-1">
                    <form class="was-validated"  method="POST" action="<?php echo URL?>Deportivos/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
                        <div class="mb-3">
                            <label for="titulo">Nombre</label>
                            <input type="hidden" name="id" id="id" value="">
                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Campo Requerido
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="Nombre">Descipción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2" required></textarea>
                            <div class="invalid-feedback">
                                Ingresa una descripción
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="lugar">Lugar</label>
                            <input type="text" class="form-control" id="lugar" name="lugar" required>
                            <div class="invalid-feedback">
                                Ingresa un lugar
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="fecha">Fecha de inicio</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" min="<?php echo date("Y-m-d");?>" max="2019-01-31" required>
                                <div class="invalid-feedback">
                                    Fecha de inicio
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="Fecha_fin">Fecha de termino</label>
                                <input type="date" class="form-control" id="Fecha_fin" name="Fecha_fin" min="<?php echo date("Y-m-d");?>" max="2019-01-31" required>
                                <div class="invalid-feedback">
                                    Fecha de termino
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="Horario">Horario</label>
                                <input type="time" class="form-control" id="Horario" name="Horario" required>
                                <div class="invalid-feedback">
                                    Ingrese una hora
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <div class="mb-3">
                                    <label for="imagen">Selecionar nueva imagen</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="imagen" name="imagen">
                                        <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="salida mb-3" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-primary " id="enviar" type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mimodaleliminar" tabindex="-1" role="dialog" aria-labelledby="mimodaleliminar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar el registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button"  id="eliminar_ok" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#body_table").on("click","button#out",function(){
            var id=$(this).data("id");
            $.get("<?php echo URL?>Deportivos/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#id").val(datos["id_evento"]);
                $("#Nombre").val(datos["Nombre"]);
                $("#descripcion").val(datos["descripcion"]);
                $("#lugar").val(datos["lugar"]);
                $("#fecha").val(datos["fecha"]);
                $("#Fecha_fin").val(datos["Fecha_fin"]);
                $("#Horario").val(datos["Horario"]);
            });
            $.get("<?php echo URL?>Deportivos/getimg/"+id,function(res){
                $(".salida").html(res);
            });
            $("#mimodal").modal("show");
        });
        $("#body_table").on("click","button#cut",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Deportivos/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#mimodaleliminar").modal("show");
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
            });
        });
    })
</script>
