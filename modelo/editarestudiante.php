<?php

    include_once("../config/conexion.php");

    $ids = $_POST['IdS'];
    $RutS = $_POST['RutS'];
    $nombreS = $_POST['nombreS'];
    $apellidoS = $_POST['apellidoS'];
    $correoS = $_POST['correoS'];
    $carreraS = $_POST['carreraS'];
    $sedeS = $_POST['sedeS'];
    $estadoS = $_POST['estadoS'];
    

    $sql = "UPDATE estudiante SET 
            rut_estudiante='".$RutS."',
            nombre_estudiante='".$nombreS."',
            apellido_estudiante='".$apellidoS."',
            correo_estudiante='".$correoS."',
            carrera='".$carreraS."',
            sede='".$sedeS."',
            estadomatricula='".$estadoS."'
             WHERE matricula =".$ids.""; 
            
    if($resultado = $conexion->query($sql)){
                header("location:../vista/inicioestudiante.php");
            }
?>