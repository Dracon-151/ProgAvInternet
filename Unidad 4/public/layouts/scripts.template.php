<script>
    const eliminar = (id) =>{
        Swal.fire({
            title: 'Estas seguro?',
            text: "Esta accion no se puede deshacer",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {

                var bodyFormData = new FormData();
                bodyFormData.append('id', id);
                bodyFormData.append('action', 'delete');
                bodyFormData.append('token', '<?= $_SESSION['token'] ?>');

                axios.post('../app/ProductController.php', bodyFormData)
                .then((response) => {
                    Swal.fire(
                        "Hecho",
                        "Registro eliminado correctamente",
                        "success"
                    ).then(() => {
                        window.location.href = '../public/index.php?success=true';
                    });
                })
                .catch(function (error) {
                    Swal.fire(
                    'Error',
                    'Algo ha salido mal',
                    'error'
                    );
                });
            }
        })
    }

    const editProduct = (target) =>{

        var values = target.getAttribute('data-product');
        producto = JSON.parse(values);

        document.getElementById('action').value = 'update';
        document.getElementById('name').value = producto.name;
        document.getElementById('description').value = producto.description;
        document.getElementById('features').value = producto.features;
        document.getElementById('brand_id').value = producto.brand_id ?? 0;
        document.getElementById('productImage').value = '';
        document.getElementById('id').value = producto.id;
    }

    const addProduct = () =>{
        document.getElementById('action').value = 'create';
        document.getElementById('name').value = '';
        document.getElementById('description').value = '';
        document.getElementById('features').value = '';
        document.getElementById('brand_id').value = 0;
        document.getElementById('productImage').value = '';
        document.getElementById('id').value = '';
    }
</script>