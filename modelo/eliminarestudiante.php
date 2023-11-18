<?php
    include_once("../config/conexion.php");

    $ids= $_GET['IdS'];
    $sql = "DELETE FROM estudiante WHERE matricula = '$ids'";

    $query = mysqli_query($conexion,$sql);
    if ($query ===TRUE){
        header("Location:../vista/inicioestudiante.php");
    }
    ?>