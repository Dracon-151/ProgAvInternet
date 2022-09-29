<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="password">Nombre del producto</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">P</span>
                    </div>
                    <input class="form-control" type="text" id="productName" placeholder="Producto">
                </div>
                <label for="password">Nombre de la marca</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">M</span>
                    </div>
                    <input class="form-control" type="text" id="brandName" placeholder="Marca">
                </div>
                <label for="password">Descripción</label>
                <div class="input-group mb-2">
                    <textarea class="form-control" id="description" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button onclick="guardar()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>