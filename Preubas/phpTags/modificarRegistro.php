<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
include('conexionbd.php');

$id = $_POST['iId'];
$tag = $_POST['iTag'];

if ($connect->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    $query = "UPDATE tags SET `taGname` = '$tag'
    WHERE `id` = $id";

    if(mysqli_query($connect, $query)) {
        echo "Registro modificado correctamente." . $query;
    } else {
        echo "Error al modificar el registro." . $query;
    }
    $connect->close();
}
?>

