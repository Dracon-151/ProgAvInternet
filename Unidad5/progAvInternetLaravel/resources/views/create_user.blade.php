<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        @csrf
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>        
        
        <title>Create User</title>

    </head>
    <body class="container-bg">
        <div class="container">
            <br>
            <div class="row justify-content-md-center">
                <div class="card py-4 px-5 col-md-6">
                    <h2>Registrar usuario</h2>
                    <br>
                    <p>Ingrese los datos de usuario</p>
                    <form action="{{route('users.store')}}" method="POST">

                        @csrf
                        <label for="name">Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">N</span>
                            </div>
                            <input class="form-control" type="text" name="name" placeholder="name">
                        </div>
                        <label for="lastname">Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">L</span>
                            </div>
                            <input class="form-control" type="text" name="lastname" placeholder="lastname">
                        </div>

                        <button type="submit" class="btn btn-success">
                            Guardar
                        </button>
                </div>
            </div>
        </div>
    </body>
</html>
