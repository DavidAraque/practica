<?php

    include_once("../config/conexion.php");

    $idp = $_POST['IdP'];
    $perfil = $_POST['perfil'];



    $sql = "UPDATE perfilsistema SET 
            nombre_perfil_sistema='".$perfil."'
             WHERE id_perfil_sistema =".$idp.""; 
            
    if($resultado = $conexion->query($sql)){
                header("location:../vista/inicioperfil.php");
            }
?>