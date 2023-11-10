<?php
    include_once("../config/conexion.php");

    $idp= $_GET['IdP'];
    $sql = "DELETE FROM perfilsistema WHERE id_perfil_sistema = '$idp'";

    $query = mysqli_query($conexion,$sql);
    if ($query ===TRUE){
        header("Location:../vista/inicioperfil.php");
    }
    ?>