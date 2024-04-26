<?php
//creacion de la cadena 3 digitos y 2 operadores 

function capchat(&$resu){
$operadores="+-*";
$op1=$operadores[rand()%3];
$op2=$operadores[rand()%3];
$dig1=rand()%9+1;
$dig2=rand()%9+1;
$dig3=rand()%9+1;
$cap3=$dig1.$op1.$dig2.$op2.$dig3;
return $cap3;
}
//verificacion del resultado
$resuLogin=$resuRegistro=$resuContra=0;
$cap1=capchat($resuLogin);
$cap2=capchat($resuRegistro);
$cap3=capchat($resuContra);

$_SESSION['capt_login']=$resuLogin;
$_SESSION['capt_record']=$resuRegistro;
$_SESSION['capt_contra']=$resuContra;
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
        <li class="nav-item">
          <a class="nav-link" href="./registro.php"><i class="bi bi-person-add p-1"></i>Registro </a>
        </li>
        <li class="nav-item active">
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

<div style="margin: auto; width: 600px;" class="card shadow-pop-tr rounded-4 cards-aling">
  <div class="card-body">

  <form method="post">
        <div class="form-group">
          <label for="lbl_email_psw" class="fs-4">Correo electronico: </label>
          <input type="email" class="form-control fs-5" id="lbl_email_psw" aria-describedby="emailHelp" placeholder="Ingresa correo electronico">
          <small id="emailHelp" class="form-text text-muted fs-6">Nunca compartiremos su correo electrónico con nadie más.</small>
        </div>
        <br>
        <div class="form-group">
          <label for="lbl_capchat_psw" class="fs-4">Capchat: </label>
          <input type="text" class="form-control fs-5" id="lbl_capchat_psw" placeholder="Cuanto es <?=$cap3;?>">
        </div>
        <br>
        <button type="submit" class="btn btn-primary rounded-4" >Recuperar</button>
  </form>

 </div>
</div>

</body>
</html>