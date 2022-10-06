<!DOCTYPE html>
<html>
    <head>
        <?php include "layouts/head.template.php" ?>
    </head>
    <body class="container-bg">
        <div class="container">
            <br>
            <div class="row justify-content-md-center">
                <div class="card py-4 px-5 col-md-6">
                    <h2>Inicio de sesión</h2>
                    <br>
                    <p>Ingrese sus datos para iniciar sesión</p>
                    <form action="../app/AuthController.php" method="POST">
                        <label for="email">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="email@gmail.com">
                        </div>

                        <label for="password">Contraseña</label>

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*</span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="*****">
                        </div>
                        <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token'] ?>">

                        <br>
                        <button type="submit" class="btn btn-success" name="action" value="access">
                            Iniciar sesión
                        </button>
                </div>
            </div>
        </div>
    </body>
</html>
