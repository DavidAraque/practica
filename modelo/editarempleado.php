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

       $sql = "SELECT * from empleado WHERE id_empleado=".$_REQUEST['Id'];
       $resultado = $conexion->query($sql);

       $row = $resultado->fetch_assoc();
       ?>
            <div class="mb-2"> 
                <label class="form-label">Rut:</label>
                <input type="text" class="form-control" name="rut" value="<?php echo $row['rut']; ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Correo:</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <div class="mb-2">
                <label class="form-label">Clave:</label>
                <input type="text" class="form-control" name="clave">
            </div>
            <div class="mb-2">
                <label class="form-label">Nombres:</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-2">
                <label class="form-label">Apellidos:</label>
                <input type="tex" class="form-control" name="apellido">
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
                include("../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM especialidad ");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['id_especialidad'] . "'>" . $resultado['nombre_especialidad'] . "</option>";
                }
                ?>
            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="../index.php" class="btn btn-dark">Regresar</a>
            </div>

</body>
</html>