<?php

    include_once("../config/conexion.php");

    $idb = $_POST['IdB'];
    $nombrebox = $_POST['nombrebox'];
    $estadob = $_POST['estadoB'];


    $sql = "UPDATE box SET 
            nombre_box='".$nombrebox."',
            id_estado_box='".$estadob."'
             WHERE id_box =".$idb.""; 
            
    if($resultado = $conexion->query($sql)){
                header("location:../vista/iniciobox.php");
            }
?>