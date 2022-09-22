<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>        <title>Index</title>
        <style>
            .logo{
                width: 40px;
                height: 40px;
            }
            .sidebar{
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="img/logo.png" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-6 d-none d-sm-block">
                    <aside class="bg-secondary navbar-dark sidebar px-2 py-2">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-10 col-sm-6 d-none d-sm-block py-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Productos</h2>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-info float-end">
                                    +
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                for ($i = 0; $i < 12; $i++) {
                                    ?>
                                        <div class="col-sm-12 col-md-3 pt-3">
                                            <div class="card bg-secondary text-light">
                                                <img src="img/logo.png" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">Album</h5>
                                                    <h6 class="card-subtitle">Twice</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="#" class="btn w-100 py-1 btn-info">Go somewhere</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn w-100 px-0 py-1 btn-warning">Editar</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn w-100 px-0 py-1 btn-danger">Eliminar</a>
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
    </body>
</html>