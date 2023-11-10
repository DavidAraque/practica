<?php

    include_once("../config/conexion.php");

    $ides = $_POST['IdES'];
    $especialidad = $_POST['especialidad'];

    $sql = "UPDATE especialidad SET 
            nombre_especialidad='".$especialidad."'
             WHERE id_especialidad =".$ides.""; 
            
    if($resultado = $conexion->query($sql)){
                header("location:../vista/inicioespecialidad.php");
            }
?>