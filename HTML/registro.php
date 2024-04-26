<?php
//creacion de la cadena 3 digitos y 2 operadores 
session_start();
session_unset();

function capchat(&$resu){
  $operadores="+-*";

  $op1=$operadores[rand()%3];
  $op2=$operadores[rand()%3];

  $dig1=rand()%9+1;
  $dig2=rand()%9+1;
  $dig3=rand()%9+1;

  $resu=resuelve($dig1,$dig2,$op1);
  $resu=resuelve($resu,$dig3,$op2);

  $capchatLogin=$dig1.$op1.$dig2.$op2.$dig3;
  return $capchatLogin;
}

function resuelve ($dig1,$dig2,$op1){
  if ($op1=="+")return $dig1+$dig2;
  else if ($op1=="-") return $dig1-$dig2;
  else return $dig1*$dig2;
}

//verificacion del resultado
$resuLogin=$resuRegistro=$resultPwd=0;

$capchatLogin=capchat($resuLogin);
$capchatNewUser=capchat($resuRegistro);
$capchatPwd=capchat($resultPwd);

$_SESSION['capt_login']=$resuLogin;
$_SESSION['capt_record']=$resuRegistro;
$_SESSION['capt_contra']=$resultPwd;

echo ($resuRegistro);
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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="fontp background-img">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
    
              <a class="nav-link" href="./home.php"><i class="bi bi-house p-1"></i>Home </i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.php"><i class="bi bi-door-open p-1"></i>Login </i></a>
            </li>
            <li class="nav-item active">
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
      <br/>

    
      <div style=" width: 600px;" class="card shadow-pop-tr rounded-4 cards-aling">
        <div class="card-body">

            <form action="../class/classAcceso.php" method="post">
                <div class="row">
                    <label for="exampleInputPassword1" class="fs-4"> Usuario: </label>
                    <div class="col">
                        <input type="text" class="form-control fs-5" name="nombre"  id="id_nombre_new" placeholder="Nombre/s">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control fs-5" name="apellidos" id="id_apellidos_new" placeholder="Apellidos">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lblemail" class="fs-4"> Correo: </label>
                    <input type="email" class="form-control fs-5" name="email" id="id_email_new" placeholder="Introduce tu correo electronico">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="fs-4">Password: </label>
                    <input type="password" class="form-control fs-5" name="clave" id="id_clave_new" placeholder="Introduce cotraseña">
                </div>
    
                <label class="form-check-label fs-4"> Genero: </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="id_hombre_btnR">
                    <label class="form-check-label fs-6" for="id_hombre_btnR" style="cursor: pointer;">
                        Hombre
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="id_mujer_btnR">
                    <label class="form-check-label fs-6" for="id_mujer_btnR" style="cursor: pointer;">
                        Mujer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="id_indefinido_btnR">
                    <label class="form-check-label fs-6" for="id_indefinido_btnR" style="cursor: pointer;">
                        Indefinido
                    </label>
                </div>
    
    
                <br>
                <div class="form-group">
                    <label class="form-check-label fs-4" for="exampleCheck1">Capchat: </label>
                    <input type="text" class="form-control fs-5 p-3 w-50" id="InputCapchat" name="capchat" placeholder="Cuanto es <?=$capchatNewUser;?>">
    
                </div>
                <br>
                <button type="submit" class="btn btn-primary wobble-hor-bottom rounded-4">Registrarte</button>
            </form>
        </div>
       
    </div>
</body>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>