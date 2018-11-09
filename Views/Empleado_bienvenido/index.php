<div class="container">

    <!-- Introduction Row -->
    <h1 class="my-4" align="center">Bienvenido
    </h1>
    <h3>Control de Empleados</h3>
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
                <form action="" id="save_emp">
                    <div class="form-group">
                        <label for="Nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id='Nombre' name="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="Apellido_patern" class="col-form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id='Apellido_patern' name="Apellido_patern">
                    </div>
                    <div class="form-group">
                        <label for="Apellido_matern" class="col-form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id='Apellido_matern' name="Apellido_matern">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Correo</label>
                        <input type="email" class="form-control" id='email' name="email">
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-form-label">Contaseña</label>
                        <input type="password" class="form-control" id='pass' name="pass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" href="#!" id="save_emp_ok" data-dismiss="modal">Registrar</button>
                <button type="button" class="btn btn-success" href="#!" id="update_emp_ok" data-dismiss="modal" >Actualizar</button>
                <script type="text/javascript">$("#update_emp_ok").hide();</script>
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

<script type="text/javascript">
    $(document).ready(function(){
        $("#save_emp_ok").click(function() {
            $("#save_emp").submit();
            swal("Registro Exitoso")

        });

        $("#save_emp").validate({
            submitHandler:function(form){
                $.post("<?php echo URL?>Empleado_bienvenido/crear",$("#save_emp").serialize(),function(res){
                    $('#save_emp').find('input, select, textarea').val('');
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

    });
</script>

