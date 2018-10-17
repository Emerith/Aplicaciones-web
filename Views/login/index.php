<div class="container center">
    <div>
        <h5 class="red-text">
            <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
        </h5>
    </div>
    <div class="container">
        <h1 class="form-heading">login Form</h1>
        <div class="login-form">
            <div class="main-div">
                <form method="post" action="<?php echo URL?>login/verify">
                    <div class="panel">
                        <h6>Ingresa tu correo y contraseña, por favor</h6>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name='email' placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name='password' placeholder="Contraseña">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name='btn_login'>Login</button>
                    </div>

                    <div class="form-group">
                        <a href="<?php echo URL?>Formato" class="btn btn-primary">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        Materialize.updateTextFields();
    });
</script>
