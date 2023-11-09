<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleado</title>
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Editando Empleados
    </h1>
    <br>
    <div class="container">
       <?php
       include_once("../config/conexion.php");

       $sql = "SELECT * from empleado WHERE id_empleado=".$_REQUEST['IdE'];
       $resultado = $conexion->query($sql);

       $row = $resultado->fetch_assoc();
       ?>
            <div class="mb-2"> 
                <label class="form-label">Rut:</label>
                <input type="text" class="form-control" name="rut" value="<?php echo $row['rut_empleado']; ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Correo:</label>
                <input type="email" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Clave:</label>
                <input type="text" class="form-control" name="clave" value="<?php echo $row['clave']; ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Nombres:</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre_empleado']; ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Apellidos:</label>
                <input type="tex" class="form-control" name="apellido" value="<?php echo $row['apellido_empleado']; ?>">
            </div>
            <label for="">Estado Empleado</label>
            <select class="form-select mb-3" name="estadoE">
                <option selected disable>--Elegir estado--</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            <label for="">Box</label>
            <select class="form-select mb-3" name="boxE">
                <option selected disable>--Selecione Box--</option>
                <?php
                include("../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM box WHERE id_estado_box ='Activo'");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['id_box'] . "'>" . $resultado['nombre_box'] . "</option>";
                }
                ?>
            </select>
            <label for="">Perfil sistema</label>
            <select class="form-select mb-3" name="perfilE">
                <option selected disable>--Selecione perfil--</option>
                <?php
                include("../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM perfilsistema");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['id_perfil_sistema'] . "'>" . $resultado['nombre_perfil_sistema'] . "</option>";
                }
                ?>
            </select>
            <label for="">Especialidad</label>
            <select class="form-select mb-3" name="especialidadE">
                <option selected disable>--Selecione Especialidad--</option>
                <?php
                include("../config/conexcion.php");
                $sql1 = "SELECT * FROM especialidad WHERE id_especialidad=".$row['especialidadid'];
                $resultado1 = $resultado1->fetch_assoc();
                $row1 = $resultado1->fetch_assoc();
                echo "<option selected value='".$row1['Id']."'>".$row1['nombre_especialidad']."</option>";
                $sql2 = "SELECT * FROM especialidad";
                $resultado2 = $conexion->query($sql2);
                while ($Fila = $resultado2->fetch_array()){
                    echo "<option value='".$Fila['Id']."'>".$Fila['nombre_especialidad']."</option>";
                }
              ?>
            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="../index.php" class="btn btn-dark">Regresar</a>
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