
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

          <a class="nav-link" href="./home.php"><i class="bi bi-house p-1"></i>Home</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php"><i class="bi bi-p-square p-1"></i>Palabras</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorias.php"><i class="bi bi-book p-1"></i>Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Passwortwiederherstellen.php"><i class="bi bi-trophy p-1"></i>Torneos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./acerca.html"><i class="bi bi-people p-1"></i>Usuarios</a>
        </li>
      </ul>
      <span class="" <?=$_SESSION['nombre'];?> ></span>
      <?
      
      $imagen ="fotos/".$_SESSION['id'].".".$_SESSION['foto'];
      if(!is_file($imagen))
        $imagen="fotos/user.png"
      ?>


      <img></img>
    </div>
  </nav>
  
  <br/><br/>
  <div>
    <h1 class="tracking-in-contract-bck d-flex justify-content-around fontp">BIENVENIDO <?=$_SESSION['nombre'];?> !!</h1>
  </div>
  
  <br><br>
</body>

</html>