<?php

    include_once("../config/conexion.php");

    $ides = $_POST['IdES'];
    $especialidad = $_POST['especialidad'];
    $letra_e = $_POST['letra_e'];

    $sql = "UPDATE especialidad SET 
            nombre_especialidad='".$especialidad."',
            letra_especialidad='".$letra_e."'
             WHERE id_especialidad =".$ides.""; 
            
    if($resultado = $conexion->query($sql)){
                header("location:../vista/inicioespecialidad.php");
            }
?>