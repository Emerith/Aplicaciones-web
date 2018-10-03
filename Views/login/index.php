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
                <div class="panel">
                    <h3>Inicio de Sesión</h3>
                    <p>Por favor ingresa tu e-mail y contraseña</p>
                </div>
                <form id="Login">

                    <div class="form-group">
                        <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">

                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">

                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
            <p class="botto-text"> Designed by Sunil Rajput</p>
        </div></div></div>

<script type="text/javascript">
    $(document).ready(function(){
        Materialize.updateTextFields();
    });
</script>
