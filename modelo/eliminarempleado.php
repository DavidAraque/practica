<?php
    include_once("../config/conexion.php");

    $ide= $_GET['IdE'];
    $sql = "DELETE FROM empleado WHERE id_empleado = '$ide'";

    $query = mysqli_query($conexion,$sql);
    if ($query ===TRUE){
        header("Location:../index.php");
    }
    ?>