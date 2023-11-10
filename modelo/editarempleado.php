<?php

    include_once("../config/conexion.php");

    $ide = $_POST['IdE'];
    $rut = $_POST['rut'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estadoE = $_POST['estadoE'];
    $boxE = $_POST['boxE'];
    $perfilE = $_POST['perfilE'];
    $especialidadE = $_POST['especialidadE'];

    $sql = "UPDATE empleado SET 
            rut_empleado='".$rut."',
            correo='".$correo."',
            clave='".$clave."',
            nombre_empleado='".$nombre."',
            apellido_empleado='".$apellido."',
            estadoempleado='".$estadoE."',
            boxid='".$boxE."',
            perfilsistemaid='".$perfilE."',
            especialidadid='".$especialidadE."' WHERE id_empleado =".$ide.""; 
            
    if($resultado = $conexion->query($sql)){
                header("location:../index.php");
            }
?>