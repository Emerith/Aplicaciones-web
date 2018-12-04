<div class="container">

    <!-- Introduction Row -->
    <h1 class="my-4" align="center">Bienvenido
    </h1>
    <h3>Control de Personal</h3>
    <div class="row">

        <div class="btn-group">
            <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#agregar">+</button>
            <a href="<?php echo URL?>Empleado_bienvenido/print_pdf" target="_blank" class="btn btn-primary btn-circle">PDF</a>
            <a href="#!" id="graficar_habitaciones" class="btn btn-primary btn-circle">Gráfica</a>
        </div>

        <div class="col-lg-12">
            <br>
        </div>
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
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
                <h5 class="modal-title">Agregar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="" id="save_emp" novalidate>
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                        <div class="invalid-feedback">
                            Ingresa un nombre
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="Apellido_patern">Apellido Paterno</label>
                            <input type="text" class="form-control" id="Apellido_patern" name="Apellido_patern" required>
                            <div class="invalid-feedback">
                                Apellido Paterno
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="Apellido_matern">Apellido Materno</label>
                            <input type="text" class="form-control" id="Apellido_matern" name="Apellido_matern" required>
                            <div class="invalid-feedback">
                                Apellido Materno
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="fecha">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Correo
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass" required>
                            <div class="invalid-feedback">
                                Contraseña
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" href="#!" id="save_emp_ok">Registrar</button>
                        <button class="btn btn-success" type="submit" href="#!" id="update_emp_ok" data-dismiss="modal">Actualizar</button>
                        <script type="text/javascript">$("#update_emp_ok").hide();</script>
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
                <button type="button" class="btn btn-primary" id="eliminar_ok" data-dismiss="modal" >
                    Aceptar
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


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
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
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

                $("#save_emp").validate({
                    submitHandler:function(form){
                        $.post("<?php echo URL?>Empleado_bienvenido/crear",$("#save_emp").serialize(),function(res){
                            $('#save_emp').find('input, select, textarea').val('');
                            swal("Registro Exitoso");
                            window.location.href="<?php echo URL?>Empleado_bienvenido";
                        })
                    }
                });

                $("#body_table").on("click","a.btn_eliminar",function(){
                    var id=$(this).data("id");
                    var url='<?php echo URL?>Empleado_bienvenido/eliminar/'+id;
                    $("#eliminar_ok").attr("url",url);
                    $("#modal_eliminar").modal('show');
                });
                $("#eliminar_ok").click(function(){
                    $.get($(this).attr("url"),function(res){
                        $("#body_table").empty().append(res);
                    });
                });

                $("#body_table").on("click","a.btn_modificar",function(){
                    $("#save_emp_ok").hide();
                    $("#update_emp_ok").show();
                    var id=$(this).data("id");
                    $.get("<?php echo URL?>Empleado_bienvenido/modificar/"+id,function(res){
                        var datos=JSON.parse(res);
                        $("#update_emp_ok").data("id",datos["id_persona"]);
                        $("#Nombre").val(datos["Nombre"]);
                        $("#Apellido_patern").val(datos["Apellido_patern"]);
                        $("#Apellido_matern").val(datos["Apellido_matern"]);
                        $("#email").val(datos["email"]);
                        $("#pass").val(datos["pass"]);

                        $("#agregar").modal('show');
                    });
                });
                $("#update_emp_ok").click(function(){
                    var id=$(this).data("id");
                    $.post("<?php echo URL?>Empleado_bienvenido/actualizar/"+id,$("#save_emp").serialize(),function(res){
                        $('#save_emp').find('input, select, textarea').val('');
                        $("#body_table").empty().append(res);

                        swal("Actualización completa", " ", "success");
                    })
                });

                $("#graficar_habitaciones").click(function(){
                    $.get("<?php echo URL?>Empleado_bienvenido/graficar",function(res){
                        $("#modal_grafica .modal-content p").empty().append(res);
                        $("#modal_grafica").modal('show');
                    });
                });

            });
        }, false);
    })();

</script>

