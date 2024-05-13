<?php
//creacion de la cadena 3 digitos y 2 operadores 
session_start();
session_unset();

include "./barra.php";

function capchat(&$resu)
{
  $operadores = "+-*";

  $op1 = $operadores[rand() % 3];
  $op2 = $operadores[rand() % 3];

  $dig1 = rand() % 9 + 1;
  $dig2 = rand() % 9 + 1;
  $dig3 = rand() % 9 + 1;

  $resu = resuelve($dig1, $dig2, $op1);
  $resu = resuelve($resu, $dig3, $op2);

  $capchatLogin = $dig1 . $op1 . $dig2 . $op2 . $dig3;
  return $capchatLogin;
}

function resuelve($dig1, $dig2, $op1)
{
  if ($op1 == "+") return $dig1 + $dig2;
  else if ($op1 == "-") return $dig1 - $dig2;
  else return $dig1 * $dig2;
}

//verificacion del resultado
$resuLogin = $resuRegistro = $resultPwd = 0;

$capchatLogin = capchat($resuLogin);
$capchatNewUser = capchat($resuRegistro);
$capchatPwd = capchat($resultPwd);

$_SESSION['capt_login'] = $resuLogin;
$_SESSION['capt_record'] = $resuRegistro;
$_SESSION['capt_contra'] = $resultPwd;

echo ($resuLogin);

//var_dump($_SESSION);
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
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="fontp background-img">
  <br>

  <div style="margin: auto; width: 600px;" class="card shadow-pop-tr rounded-4 cards-aling">
    <div class="card-body">

      <form action="../class/classAcceso.php" method="post">
        <input type="hidden" name="action" value="login">

        <?php
        if (isset($_GET['m'])) {
          $estado = $_GET['m'];
          $mensaje = "";

          switch ($estado) {
            case 1:
              $mensaje = "Error de credenciales";
              break;
            case 2:
              $mensaje = "Error de campos vacios";
              break;
            case 3:
              $mensaje = "Error capchat es incorrecto";
              break;
            case 4:
              $mensaje = "Inicia sesion";
              break;
            default:
              $mensaje = "CHECATE MIJO";
              break;
          }

          echo ("<div class='container border rounded-1 fs-4 container-fluid alert alert-danger'> 
                  $mensaje
                  </div>");
        }
        ?>

        <div class="form-group">
          <label for="exampleInputEmail1" class="fs-4">Correo: </label>
          <input type="email" class="form-control fs-5" name="email" id="id_email_login" placeholder="Ingrese email">
          <small id="emailHelp" class="form-text text-muted fs-6">Nunca compartiremos su correo electrónico con nadie
            más.</small>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1" class="fs-4"> Contraseña: </label>
          <input type="password" class="form-control fs-5" name="clave" id="id_password_login" placeholder="Ingrese contraseña">
        </div>
        <br>
        <div class="form-group">
          <label class="form-check-label fs-4" for="exampleCheck1">Capchat: </label>
          <input type="text" class="form-control fs-5 w-50 p-3" name="capchat" id="capchat_login" aria-describedby="emailHelp" placeholder="Cuanto es <?= $capchatLogin; ?>">

        </div>
        <br>
        <button type="submit" class="btn btn-primary rounded-4">Iniciar Sesion</button>
      </form>

    </div>

  </div>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>