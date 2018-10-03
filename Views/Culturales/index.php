<div class="row">
    <div class="col l8 offset-l2 m12 s12">
        <div class=" col s3 ">
            <input type="text" class="datepickerFI " id="id_inicio" placeholder="Fecha Inicio"  >
        </div>
        <div class="col s3">
            <input type="text" class="datepicker" id="id_final" placeholder="Fecha Final" >
        </div>
        <div class="col s2">
            <input type="number" min="1" max="20" class="adultos" placeholder="Adultos"  id="comboadultos">

        </div>
        <div class="col s2">
            <input type="number" min="0" max="20" class="niños" placeholder="Niños"  id="comboniños">
        </div>
        <div class="input-field col s2">
            <a id="buscar" class="btn modal-close cyan lighten-2 black-text" data-id="" href="#!">Buscar</a>
        </div>
    </div>
    <div class="col l8 offset-l2 m12 s12">
        <div class="col s2.7"  id="divnumerodias" style="display: none">
            <h5 class="text-primary black-text" >Dias de Reservacion:</h5>
        </div>
        <div class="col s6">
            <h5 id="id_numerodias"></h5>
        </div>
    </div>
</div>

<div class="row" id="id_tipo">
    <div class="col l8 offset-l2 m12 s12">
        <form id="muestra">
            <?php
            require_once ("tabla.php");
            ?>
        </form>
    </div>
</div>