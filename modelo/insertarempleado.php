<?php
include("../config/conexion.php");

if (isset($_POST['rut']) && isset($_POST['correo']) && isset($_POST['clave']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['estadoE']) && isset($_POST['boxE']) && isset($_POST['perfilE']) && isset($_POST['especialidadE'])) {
    $rut = $_POST['rut'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estadoE = $_POST['estadoE'];
    $boxE = $_POST['boxE'];
    $perfilE = $_POST['perfilE'];
    $especialidadE = $_POST['especialidadE'];

    $sql = "INSERT INTO empleado (rut_empleado, correo, clave, nombre_empleado, apellido_empleado, estadoempleado, boxid, perfilsistemaid, especialidadid) VALUES 
    ('$rut', '$correo', '$clave', '$nombre', '$apellido', '$estadoE', '$boxE', '$perfilE', '$especialidadE')";

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
