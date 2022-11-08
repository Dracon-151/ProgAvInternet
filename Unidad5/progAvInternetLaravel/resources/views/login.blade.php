<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>        
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

      <title>Tarea</title>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="container-bg">
        <div class="container">
            <br>
            <div class="row justify-content-md-center">
                <div class="card py-4 px-5 col-md-6">
                    <h2>{{Auth::user()->name}}</h2>
                    <h2>Login</h2>
                    <br>
                    <p>Ingrese sus datos</p>
                    <form action="{{route('login')}}" method="POST">
                      @csrf
                        <label for="email">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="email@gmail.com">
                        </div>
                        <label for="password">Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*</span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="*****">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success" name="action" value="access">
                          Guardar
                        </button>
                </div>
            </div>
        </div>
    </body>
</html>
