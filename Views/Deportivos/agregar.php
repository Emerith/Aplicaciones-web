<?php

?>
<div class="container justify-content-md-center">
    <div class="text-center">
        <h2>Agregar Evento</h2>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-5 order-md-1">
            <form class="was-validated"  method="POST" action="<?php echo URL?>Deportivos/agregar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">

                <div class="modal-body">
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

                        <div class="form-group">
                            <label for="lugar">imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                            <div class="invalid-feedback">
                                Ingresa una imagen
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <button  class="btn btn-primary " id="enviar"  type="submit">Registrar</button>
                    </div>
            </form>
        </div>

    </div>
</div>