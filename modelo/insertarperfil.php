<?php
include("../config/conexion.php");

if (isset($_POST['perfil']) ) {
    $perfil = $_POST['perfil'];

    $sql = "INSERT INTO perfilsistema (nombre_perfil_sistema) VALUES 
    ('$perfil')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../vista/inicioperfil.php");
    } else {
        echo "Datos NO insertados";
    }
} else {
    echo "Faltan datos en el formulario.";
}
?>
