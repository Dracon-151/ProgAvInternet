<!DOCTYPE html>
<html>
    <head>

        <?php include "layouts/head.template.php" ?>
        
        <?php
            $producto = $productC->getProductoDetails($_GET['slug']);
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
                            <div class="col-md-12">
                                <h2>Detalle de producto</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 pt-3">
                                <img src="<?php echo $producto->cover ?>" class="detail-img">
                            </div>
                            <div class="col-sm-12 col-md-6 pt-3">
                                <h4><?php echo $producto->name ?></h4>
                                <h5><?php if(isset($producto->brand->name)) echo $producto->brand->name; else echo '////' ?></h5>
                                <h6><p><?php echo $producto->description ?></p></h6>
                                
                                <?php if(isset($producto->categories[0])){ ?>
                                    <h6>Categorias</h6> 
                                    <p>
                                        <?php
                                            foreach($producto->categories as $category){ 
                                        ?>
                                            <?php echo $category->name ?>, 
                                        <?php
                                            }
                                        ?>
                                    </p>
                                <?php } ?>

                                <?php if(isset($producto->tags[0])){ ?>
                                    <h6>Tags</h6> 
                                    <p>
                                        <?php
                                            foreach($producto->tags as $tag){ 
                                        ?>
                                            <?php echo $tag->name ?>, 
                                        <?php
                                            }
                                        ?>
                                    </p>
                                <?php } ?>

                                <div class="row">
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