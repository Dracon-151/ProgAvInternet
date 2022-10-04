<?php include "../app/ProductController.php" ?>

<?php 
    session_start();
    if(!isset($_SESSION['userData'])){
      if($_SERVER['REQUEST_URI'] != '/ProgAvInternet/Unidad%204/public/login.php') header('Location:../public/login.php');
    }
    
    $productC = new ProductController();
?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>        
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<title>Tarea</title>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
.logo {
  width: 40px;
  height: 40px;
}
.sidebar {
  min-height: 100vh;
  height: parent;
}
.detail-img {
  max-width: 360px;
  max-height: 360px;
  width: auto;
  height: auto;
}
.container-bg{
  background-color: #f3f3f3;
}
.card-product{
  background-color: #f0f0f0;
  height: 530px;
}
.card-product img{
  max-width: 350px;
  max-height: 300px;
  width: auto;
  height: auto;
}
</style>