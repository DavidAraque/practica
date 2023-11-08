<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Empleado</title>
</head>

<body>
    <br>
    <div class="Container"></div>
    <h1 class="text-center">Empleados
    </h1>
    <br>
    <div class="container">
            <a href="vista/agregarempleado.php" class="btn btn-success">Agregar empleado</a>
        </div>
    <div class="Container">
        <table class="table table-dark table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">rut_empleado</th>
                    <th scope="col">correo</th>
                    <th scope="col">clave</th>
                    <th scope="col">nombres </th>
                    <th scope="col">apellidos</th>
                    <th scope="col">estado empleado</th>
                    <th scope="col">box</th>
                    <th scope="col">nivel</th>
                    <th scope="col">especialidad</th>
                    <th scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("config/conexion.php");

                $sql = $conexion->query("SELECT * FROM empleado
                        INNER JOIN box ON empleado.boxid = box.id_box
                        INNER JOIN perfilsistema ON empleado.perfilsistemaid = perfilsistema.id_perfil_sistema
                        INNER JOIN especialidad ON empleado.especialidadid = especialidad.id_especialidad
                        ORDER BY empleado.id_empleado");

                while ($resultado = $sql->fetch_assoc()) {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id_empleado']?></th>
                        <th scope="row"><?php echo $resultado['rut_empleado']?></th>
                        <th scope="row"><?php echo $resultado['correo']?></th>
                        <th scope="row"><?php echo $resultado['clave']?></th>
                        <th scope="row"><?php echo $resultado['nombre_empleado']?></th>
                        <th scope="row"><?php echo $resultado['apellido_empleado']?></th>
                        <th scope="row"><?php echo $resultado['estadoempleado']?></th>
                        <th scope="row"><?php echo $resultado['nombre_box']?></th>
                        <th scope="row"><?php echo $resultado['nombre_perfil_sistema']?></th>
                        <th scope="row"><?php echo $resultado['nombre_especialidad']?></th>
                        <th>
                            <a href="modelo/editarempleado.php ?Id=<?php echo $resultado['id_empleado']?>"  class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
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