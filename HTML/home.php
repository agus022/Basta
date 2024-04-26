<?php
session_start();
if(!isset($_SESSION['nombre']))
  header("location: login.php?=4");//correo duplicado , correo no existe m-3, no te hagas no te has registtrado =5
var_dump($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practica</title>
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body class="fontp background-img">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">

          <a class="nav-link" href="./home.php"><i class="bi bi-house p-1"></i>Home </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php"><i class="bi bi-door-open p-1"></i>Login </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registro.php"><i class="bi bi-person-add p-1"></i>Registro </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Passwortwiederherstellen.php"><i class="bi bi-lock p-1"></i>Recuperar
            Contraseña</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./acerca.html"><i class="bi bi-info-circle p-1"></i>Acerca de</a>
        </li>
      </ul>
    </div>
  </nav>
  <br/><br/>
  <div>
    <h1 class="tracking-in-contract-bck d-flex justify-content-around fontp">BIENVENIDO <?=$_SESSION['nombre'];?> !!  </h1> <!--AGREGAR EL NOMBRE DEL USUARIO -->
  </div>


  <div class="d-flex justify-content-around">
    <div class="rounded-5 card w-25" style="width: 18rem;">
    <a href="./indexAdmin.php"> <img class="card-img-top rounded-5" src="https://m.media-amazon.com/images/I/417KzzfilSL.png" alt="Jugar basta"></a>
      <div class="card-body">
        <p class="card-text h1 text-center">!! JUGAR BASTA !!</p>
      </div>
    </div>
    
  </div>

  <br><br>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success ml-5" data-toggle="modal" data-target="#successModal">
    Success
  </button>
  <!---Button trigger modal-->
  <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#warningModal">
    Warning
  </button>

  <a href="">Cerrar Sesion</a>
  

  <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="rounded-5 modal-content modalbodybg border-0">
        <div class="modal-header modalsuccessbg border-bottom border-0">
          <h1 class="mx-auto"><i class=" bi-check-circle fs-1 "></i></h1>
        </div>
        <div class="modal-body mx-auto ">
          <p class="fs-4 font-weight-bold">Great!!</p>
          <p class="fs-5">Su participacion fue registrada</p>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-danger rounded-5 mx-auto" data-dismiss="modal"><i
              class="bi bi-x-lg"></i>Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modalwbg rounded-5 modal-content border-0">
        <div class="modal-header modalwarningbg border-bottom border-0">
          <h1 class="mx-auto"><i class="bi bi-exclamation-triangle fs-1 "></i></h1>
        </div>
        <div class="modal-body mx-auto ">
          <p class="fs-4 font-weight-bold">Great!!</p>
          <p class="fs-5">Su participacion fue registrada</p>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-danger rounded-5 mx-auto" data-dismiss="modal"><i
              class="bi bi-x-lg"></i>Cerrar</button>

        </div>
      </div>
    </div>
  </div>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
