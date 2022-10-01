<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form enctype="multipart/form-data" action="../app/ProductController.php" method="POST">
                <div class="modal-body">
                    <label for="name">Nombre del producto</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">P</span>
                        </div>
                        <input class="form-control" type="text" name="name" placeholder="Producto">
                    </div>
                    <label for="brand_id">Marca</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">#</span>
                        </div>
                        <input class="form-control" type="number" name="brand_id" placeholder="Marca">
                    </div>
                    <label for="features">Features</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">F</span>
                        </div>
                        <input class="form-control" type="text" name="features" placeholder="Features">
                    </div>
                    <label for="description">Descripción</label>
                    <div class="input-group mb-2">
                        <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                    </div>
                    <label for="productImage">Imagen</label>
                    <div class="input-group mb-2">
                        <input type="file" name="productImage" class="form-control" accept="image/*"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" value="create" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>