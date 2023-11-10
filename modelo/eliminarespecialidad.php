<?php
    include_once("../config/conexion.php");

    $ides= $_GET['IdES'];
    $sql = "DELETE FROM especialidad WHERE id_especialidad = '$ides'";

    $query = mysqli_query($conexion,$sql);
    if ($query ===TRUE){
        header("Location:../vista/inicioespecialidad.php");
    }
    ?>