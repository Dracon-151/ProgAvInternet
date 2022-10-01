<!DOCTYPE html>
<html>
    <head>
        <?php include "layouts/head.template.php" ?>
        
        <?php
            $productos = $productC->getProductos();
            $brands = $productC->getBrands();
        ?>
    
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
                            <div class="col-md-10">
                                <h2>Productos</h2>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    +
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <?php
                                foreach($productos as $producto) {
                                    ?>
                                        <div class="col-sm-12 col-md-4 pt-4">
                                            <div class="card card-product">
                                                <img src=" <?php echo $producto->cover ?> " class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title"> <?php echo $producto->name ?> </h5>
                                                    <h6 class="card-subtitle"> <?php if(isset($producto->brand->name)) echo $producto->brand->name; else echo '////' ?> </h6>
                                                    <p class="card-text"> <?php echo substr($producto->description, 0, 100) . '...'; ?> </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="details.php?slug=<?php echo $producto->slug ?>" class="btn w-100 py-1 btn-info">Detalles</a>
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
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <?php include "layouts/modalAddEdit.template.php" ?>

        <!-- Scripts -->
        <?php include "layouts/scripts.template.php" ?>
    </body>
</html>