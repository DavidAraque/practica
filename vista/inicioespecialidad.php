<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Especialidad</title>
</head>

<body>
    <br>
    <div class="Container"></div>
    <h1 class="text-center">Especialidad
    </h1>
    <br>
    <div class="container">
            <a href="agregarespecialidad.php" class="btn btn-success">Especialidad</a>
        </div>
    <div class="Container">
        <table class="table table-dark table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM especialidad
                        ORDER BY especialidad.id_especialidad");

                while ($resultado = $sql->fetch_assoc()) {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id_especialidad']?></th>
                        <th scope="row"><?php echo $resultado['nombre_especialidad']?></th>
                        <th>
                            <a href="editarespecialidad.php ?IdES=<?php echo $resultado['id_especialidad']?>"  class="btn btn-warning">Editar</a>
                            <a href="../modelo/eliminarespecialidad.php?IdES=<?php echo $resultado['id_especialidad']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
       
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