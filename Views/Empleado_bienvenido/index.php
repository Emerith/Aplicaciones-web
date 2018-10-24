<!-- Page Content -->
<div class="container">

    <!-- Introduction Row -->
    <h1 class="my-4" align="center">Bienvenido
    </h1>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="my-4" >Control de Eventos</h4>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo URL?>Public/imagenes/civ.jpg" alt="">
            <h3>Cívicos </h3>
            <button class="btn btn-primary" data-toggle="modal" data-target="#tabla_civ">Registro</button>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo URL?>Public/imagenes/images.jpg" alt="">
            <h3>Culturales</h3>
            <button class="btn btn-primary" data-toggle="modal" data-target="#tabla_cul">Registro</button>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo URL?>Public/imagenes/dep.jpg" alt="">
            <h3>Deportivos</h3>
            <button class="btn btn-primary" data-toggle="modal" data-target="#tabla_dep">
                Registro
            </button
        </div>
    </div>
</div>


<div class="modal fade" id="tabla_civ" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registro de Eventos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lugar:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora:</label>
                        <input type="time" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#tabla_actcib">Actualizar</button>
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#tabla_elcib">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_dep" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registro de Eventos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lugar:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora:</label>
                        <input type="time" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#tabla_actdep">Actualizar</button>
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#tabla_eldep">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_cul" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registro de Eventos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lugar:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora:</label>
                        <input type="time" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#tabla_actcul">Actualizar</button>
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#tabla_elcul">Eliminar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tabla_actcib" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Evento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Festival de las almas</td>
                    <td>Cultural</td>
                    <td>Valle de Bravo</td>
                    <td>27 de Octubre</td>
                    <td>11:00 am</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_elcib" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Evento</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Festival de las almas</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_actcul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Evento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Festival de las almas</td>
                    <td>Cultural</td>
                    <td>Valle de Bravo</td>
                    <td>27 de Octubre</td>
                    <td>11:00 am</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_elcul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Evento</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Festival de las almas</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_actdep" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Evento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Festival de las almas</td>
                    <td>Cultural</td>
                    <td>Valle de Bravo</td>
                    <td>27 de Octubre</td>
                    <td>11:00 am</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tabla_eldep" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Evento</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Festival de las almas</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

