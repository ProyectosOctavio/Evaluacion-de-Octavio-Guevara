<?php

if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once 'conexion.php';

    // Obtener el identificador del registro desde la URL
    $idC = isset($_GET['idC']) ? $_GET['idC'] : '';

    // Verificar si el identificador es válido
    if (!empty($idC)) {

        // Preparar la consulta SQL con un parámetro
        $my_query = "DELETE FROM coordinador WHERE idC = ?";
        $stmt = $mysql->prepare($my_query);

        // Asignar el valor del parámetro y ejecutar la consulta
        $stmt->bind_param("i", $idC);
        $resultado = $stmt->execute();

        if ($resultado == true) {
            echo 'Dato eliminado';
        } else {
            echo 'Error de eliminacion';
        }
    } else {
        echo 'Identificador de registro no proporcionado';
    }
}
else {
    echo 'ERROR DESCONOCIDO';
}



?>