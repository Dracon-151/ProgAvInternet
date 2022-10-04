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

                axios.post('../app/ProductController.php', bodyFormData)
                .then((response) => {
                    Swal.fire(
                        "Hecho",
                        "Registro eliminado correctamente",
                        "success"
                    ).then(() => {
                        window.location.reload();
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
</script>