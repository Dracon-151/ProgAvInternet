<!DOCTYPE html>
<html>
    <head>
        <?php include "layouts/head.template.php" ?>
    </head>
    <body class="bg-secondary">
        <div class="container container-bg">
            <br>
            <div class="row justify-content-md-center">
                <div class="card py-4 px-5 col-md-6">
                    <h2>Inicio de sesión</h2>
                    <br>
                    <p>Ingrese sus datos para iniciar sesión</p>
                    <form>
                        <label for="email">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input class="form-control" type="email" id="email" placeholder="email@gmail.com">
                        </div>

                        <label for="password">Contraseña</label>

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*</span>
                            </div>
                            <input class="form-control" type="password" id="password" placeholder="*****">
                        </div>

                        <br>
                        <a class="btn btn-success" href="index.php">
                            Iniciar sesión
                        </a>
                </div>
            </div>
        </div>
    </body>
</html>
