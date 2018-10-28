<div class="row">
    <div class="card-panel">
        <form action="" id="save_estadohabitacion">
            <fieldset>
                <input placeholder="Nombre" type="text" name='Nombre' id="Nombre" >
            </fieldset>

            <fieldset>
                <a href="#!" id="save_estadohabitacion_ok" class="btn cyan lighten-2 black-text">Registrar</a>
            </fieldset>
        </form>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#save_estadohabitacion_ok").click(function() {
            $("#save_estadohabitacion").submit();
        });

        $("#save_estadohabitacion").validate({
            submitHandler:function(form){
                $.post("<?php echo URL?>Formato/crear",$("#save_estadohabitacion").serialize(),function(res){

                })
            }
        });
    });
</script>
