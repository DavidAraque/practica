<?php
include("../config/conexion.php");

if (isset($_POST['matriculaS']) && isset($_POST['RutS']) && isset($_POST['nombreS']) && isset($_POST['apellidoS']) && isset($_POST['correoS']) && isset($_POST['carreraS']) && isset($_POST['sedeS']) && isset($_POST['estadoS']) ) {
    $matriculaS = $_POST['matriculaS'];
    $RutS = $_POST['RutS'];
    $nombreS = $_POST['nombreS'];
    $apellidoS = $_POST['apellidoS'];
    $correoS = $_POST['correoS'];
    $carreraS = $_POST['carreraS'];
    $sedeS = $_POST['sedeS'];
    $estadoS = $_POST['estadoS'];
    
    $sql = "INSERT INTO estudiante 
    (matricula, rut_estudiante, nombre_estudiante, apellido_estudiante, correo_estudiante, carrera, sede, estadomatricula) VALUES 
    ('$matriculaS', '$RutS', '$nombreS', '$apellidoS', '$correoS', '$carreraS', '$sedeS', '$estadoS')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../vista/inicioestudiante.php");
    } else {
        echo "Datos NO insertados";
    }
} else {
    echo "Faltan datos en el formulario.";
}
?>
