<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form enctype="multipart/form-data" action="<?= BASE_PATH ?>productCont" method="POST">
                <div class="modal-body">
                    <label for="name">Nombre del producto</label>
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" id="name" name="name" placeholder="Producto">
                    </div>
                    <label for="brand_id">Marca</label>
                    <div class="input-group mb-2">
                        <select class="form-control" id="brand_id" name="brand_id">

                            <option value="0" default disabled selected>Seleccione una marca</option>
                            <?php 
                                foreach($brands as $brand){
                            ?>      
                                    <option value="<?= $brand->id ?>"> <?= $brand->name ?> </option> 
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <label for="features">Features</label>
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" id="features" name="features" placeholder="Features">
                    </div>
                    <label for="description">Descripción</label>
                    <div class="input-group mb-2">
                        <textarea class="form-control" id="description" name="description" cols="30" rows="10"></textarea>
                    </div>
                    <label for="productImage">Imagen</label>
                    <div class="input-group mb-2">
                        <input type="file" id="productImage" name="productImage" class="form-control" accept="image/*"/>
                    </div>
                </div>
                <input type="hidden" id="action" name="action">
                <input type="hidden" id="id" name="id">
                <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token'] ?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>