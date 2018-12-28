<?php
?>
<div class="container center">
        <div>
            <h5 class="">
                <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
            </h5>
        </div>
        <div class="container">
            <h1 class="form-heading">login Form</h1>
            <div class="login-form">
                <div class="main-div" >
                    <form class="needs-validation"  method="POST" action="<?php echo URL?>login/verify"  enctype="multipart/form-data" autocomplete="off">

                        <div class="panel">
                            <h6>Ingresa tu correo y contraseña, por favor</h6>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Usuario" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Nombre requerido
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Contraseña requerida
                            </div>
                        </div>

                        <div class="">
                            <button href="#!" class="btn btn-primary" id="Login" data-id="" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>