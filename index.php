<?php 

session_start();
if(isset($_SESSION['datos'])){
    //Creamos varibales y llamamos los datos del usuario
    $nombre = $_SESSION['datos']['name_user'];
    $rol = $_SESSION['datos']['roles_user'];
}else{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL PRINCIPAL</title>
</head>
<body>
    <h1>BIENVENIDO: <?php echo $nombre?></h1>
    <h1>Usted tiene el rol de: <?php echo $rol?></h1>
</body>
</html>