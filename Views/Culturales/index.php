<div class="container">

    <!-- Introduction Row -->
    <h1 class="my-4" align="center">Eventos Culturales
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
                <form class="needs-validation" action="" id="save_cult" novalidate>
                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                            <div class="invalid-feedback">
                                Ingresa un nombre
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="Nombre">Descipción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="2" required></textarea>
                        <div class="invalid-feedback">
                            Ingresa una descripción
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lugar">Lugar</label>
                        <input type="text" class="form-control" id="lugar" name="lugar" required>
                        <div class="invalid-feedback">
                            Ingresa un lugar
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-4 mb-3">
                            <label for="fecha">Fecha de inicio</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" min="<?php echo date("Y-m-d");?>" max="2018-12-31" required>
                            <div class="invalid-feedback">
                                Fecha de inicio
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="Fecha_fin">Fecha de termino</label>
                            <input type="date" class="form-control" id="Fecha_fin" name="Fecha_fin" min="<?php echo date("Y-m-d");?>" max="2018-12-31" required>
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
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" href="#!" id="save_cult_ok">Registrar</button>
                        <button class="btn btn-success" type="submit" href="#!" id="update_cult_ok" data-dismiss="modal">Actualizar</button>
                        <script type="text/javascript">$("#update_cult_ok").hide();</script>
                    </div>
                </form>
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
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);

                $("#save_cult").validate({
                    submitHandler:function(form){
                        $.post("<?php echo URL?>Culturales/crear",$("#save_cult").serialize(),function(res){
                            $('#save_cult').find('input, select, textarea').val('');
                            swal("Registro Exitoso");
                            window.location.href="<?php echo URL?>Culturales";
                        })
                    }
                });

                $("#body_table").on("click","a.btn_eliminar",function(){
                    var id=$(this).data("id");
                    var url='<?php echo URL?>Culturales/eliminar/'+id;
                    $("#eliminar_ok").attr("url",url);
                    $("#modal_eliminar").modal('show');
                });
                $("#eliminar_ok").click(function(){
                    $.get($(this).attr("url"),function(res){
                        $("#body_table").empty().append(res);
                    });
                });

                $("#body_table").on("click","a.btn_modificar",function(){
                    $("#save_cult_ok").hide();
                    $("#update_cult_ok").show();
                    var id=$(this).data("id");
                    $.get("<?php echo URL?>Culturales/modificar/"+id,function(res){
                        var datos=JSON.parse(res);
                        $("#update_cult_ok").data("id",datos["id_evento"]);
                        $("#Nombre").val(datos["Nombre"]);
                        $("#descripcion").val(datos["descripcion"]);
                        $("#lugar").val(datos["lugar"]);
                        $("#fecha").val(datos["fecha"]);
                        $("#Fecha_fin").val(datos["Fecha_fin"]);
                        $("#Horario").val(datos["Horario"]);

                        $("#agregar").modal('show');
                    });
                });
                $("#update_cult_ok").click(function(){
                    var id=$(this).data("id");
                    $.post("<?php echo URL?>Culturales/actualizar/"+id,$("#save_cult").serialize(),function(res){
                        $('#save_cult').find('input, select, textarea').val('');
                        $("#body_table").empty().append(res);

                        swal("Actualización completa", " ", "success");
                    })
                });
            });
        }, false);
    })();

</script>

