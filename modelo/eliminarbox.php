<?php
    include_once("../config/conexion.php");

    $idb= $_GET['IdB'];
    $sql = "DELETE FROM box WHERE id_box = '$idb'";

    $query = mysqli_query($conexion,$sql);
    if ($query ===TRUE){
        header("Location:../vista/iniciobox.php");
    }
    ?>