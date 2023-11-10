<?php
include("../config/conexion.php");

if (isset($_POST['nombrebox']) && isset($_POST['estadoB'])) {
    $nombrebox = $_POST['nombrebox'];
    $estadoB = $_POST['estadoB'];

    $sql = "INSERT INTO box (nombre_box, id_estado_box) VALUES 
    ('$nombrebox', '$estadoB')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../vista/iniciobox.php");
    } else {
        echo "Datos NO insertados";
    }
} else {
    echo "Faltan datos en el formulario.";
}
?>
