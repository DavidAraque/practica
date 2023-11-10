<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Perfil</title>
</head>

<body>
    <br>
    <h1 class="text-center bg-black ">Editar Perfil</h1>
    <br>
    <div class="container">
    <?php
        include_once("../config/conexion.php");

        $sql = "SELECT * from perfilsistema WHERE id_perfil_sistema=" . $_REQUEST['IdP'];
        $resultado = $conexion->query($sql);

        $row = $resultado->fetch_assoc();
        ?>
        <form action="../modelo/editarperfil.php" method="POST">
        <input type="hidden" class="form-control" name="IdP" value="<?php echo $row['id_perfil_sistema']; ?>">
            <div class="mb-2">
                <label class="form-label">Nombre Perfil:</label>
                <input type="text" class="form-control" name="perfil" value="<?php echo $row['nombre_perfil_sistema']; ?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="inicioperfil.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>