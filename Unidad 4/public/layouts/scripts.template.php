<script>
    const eliminar = () =>{
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
                Swal.fire(
                'Eliminado',
                'Se ha eliminado el registro',
                'success'
                )
            }
        })
    }

    const guardar = () =>{
        Swal.fire({
            icon: 'success',
            title: 'Se ha guardado el registro',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>