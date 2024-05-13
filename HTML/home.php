<?php
session_start();
if(!isset($_SESSION['nombre']))
  header("location: login.php?=4");//correo duplicado , correo no existe m-3, no te hagas no te has registtrado =5
//var_dump($_SESSION);
 
include "./barra.php";//INCLUIR LA NAVBAR
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

  <br/><br/>
  <div>
    <h1 class="tracking-in-contract-bck d-flex justify-content-around fontp"> ¡ Bienvenido <?=$_SESSION['nombre'];?> !  </h1> <!--AGREGAR EL NOMBRE DEL USUARIO -->
  </div>


  <div class="d-flex justify-content-around">
    <div class="rounded-5 card w-25" style="width: 18rem;">
    <a href="./indexAdmin.php"> <img class="card-img-top rounded-5" src="https://m.media-amazon.com/images/I/417KzzfilSL.png" alt="Jugar basta"></a>
      <div class="card-body">
        <p class="card-text text-center h2">¡ JUGAR BASTA !</p>
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
</body>

</html>
