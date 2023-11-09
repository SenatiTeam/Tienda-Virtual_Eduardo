<?php   
require_once('conexion.php');

$correo = $_POST['correo'];
$clave = $_POST['clave'];

//echo $correo . "_____" .$clave;

//Consultamos al usuario mediante un "script" a la base de datos
$sql = "SELECT * FROM usuario";
$resultado = $conexion -> query($sql);

if ($resultado -> num_rows > 0){
    //echo "las filas devueltas son " .$resultado->num_rows;
}


$ruta = "";
$encontrados = 0;
//Consultamos todos los datos y mostramos mediante un ARRAY ASOCIATIVO
while ($row = $resultado -> fetch_array(MYSQLI_ASSOC)){
    //print_r($row);
    if($row['email_user'] == $correo  && $row['password_user'] == $clave){
        $encontrados = 1;
        session_start();
        $_SESSION['datos'] = $row;
        break;
    }else{
        $encontrados = 0;
    }
}
if ($encontrados == 1){
    header('location: index.php');
}else{
    $ruta ="location: login.php";
    header($ruta);
}

?>