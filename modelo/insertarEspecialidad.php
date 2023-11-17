<?php
include("../config/conexion.php");


if (isset($_POST['especialidad'])) {
    $especialidad = $_POST['especialidad'];
    $letra_e = $_POST['letra_e'];
    $sql = "INSERT INTO especialidad (nombre_especialidad,letra_especialidad) VALUES ('$especialidad','$letra_e')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../vista/inicioespecialidad.php");
    } else {
        echo "Datos NO insertados";
    }
} else {
    echo "Faltan datos en el formulario.";
}
?>

