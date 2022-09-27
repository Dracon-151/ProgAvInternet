<!DOCTYPE html>
<html>
    <head>

        <?php include "layouts/head.template.php" ?>

    </head>
    <body>

        <!-- Header -->
        <?php include "layouts/headbar.template.php" ?>

        <div class="container-fluid container-bg">
            <div class="row">

                <!-- Sidebar -->
                <?php include "layouts/sidebar.template.php" ?>

                <div class="col-md-10 col-sm-6 d-none d-sm-block py-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Detalle de producto</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 pt-3">
                                <img src="img/logo.png" class="detail-img">
                            </div>
                            <div class="col-sm-12 col-md-6 pt-3">
                                <h4>Album</h4>
                                <h5>Twice</h5>
                                <h6><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></h6>  
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="btn w-100 py-1 btn-info">Go somewhere</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn w-100 px-0 py-1 btn-warning" 
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" onclick="eliminar()" class="btn w-100 px-0 py-1 btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <?php include "layouts/modalAddEdit.template.php" ?>

        <!-- Scripts -->
        <?php include "layouts/scripts.template.php" ?>
            
        </script>
    </body>
</html>