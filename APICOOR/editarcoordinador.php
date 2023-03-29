<?php

require_once 'conexion.php';

$data = json_decode(file_get_contents("php://input"), true);

// Obtener el identificador del registro a actualizar desde la URL
$idC = $_GET['idC'];

$sql = "UPDATE coordinador SET nombres='" . $data["nombres"] . "', apellidos='" . $data["apellidos"] . "', fechaNac='" . $data["fechaNac"] ."', titulo='" . $data["titulo"] ."', email='" . $data["email"] ."', facultad='" . $data["facultad"] ."' WHERE idC=" . $idC;
$resultado=$mysql->query($sql);

if ($resultado==true) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: ";
}




?>