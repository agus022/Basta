<?
$ruta="./archivos/";

if(isset($_FILES['archivo']) && $_FILES['archivo']['name']){
    if(!is_dir($ruta))
        mkdir("archivos");
    move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta.$_FILES['archivo']['name']);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <form method="post"  enctype="multipart/form-data">
        <input type="file" name="archivo" >
        <input type="submit">
    </form>    




<?//despliegue de archivos 
$iconos = [
    "pdf" => "file-earmark-pdf",
    "jpg" => "file-earmark-image",
    "jpeg" => "file-earmark-image",
    "png" => "file-earmark-image",
    "docx" => "file-earmark-word",
];
    if(is_dir($ruta)){
        $direccion=opendir($ruta);
        
        while($archivo=readdir($direccion)){
            if($archivo != "." && $archivo != ".."){
                $extension =  pathinfo($archivo, PATHINFO_EXTENSION);
                if(isset($iconos[$extension])) {
                    $icono = $iconos[$extension];
                } else {
                    // Ícono por defecto si no hay uno específico para la extensión
                    $icono = "file-earmark";
                }
                // Mostrar el ícono y el nombre del archivo dentro de un enlace de Bootstrap
                echo "<a href='archivos/$archivo'><i class='bi bi-$icono'></i> $archivo</a><br>";
            }
        }
        closedir($direccion);
    }

?>
</body>
</html>