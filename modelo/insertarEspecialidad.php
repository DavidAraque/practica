<?php
include("../config/conexion.php");

if (isset($_POST['especialidad'])) {
    $especialidad = $_POST['especialidad'];
    $sql = "INSERT INTO especialidad (nombre_especialidad) VALUES ('$especialidad')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../index.php");
    } else {
        echo "Datos NO insertados";
    }
} else {
    echo "Faltan datos en el formulario.";
}
?>