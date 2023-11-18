<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar estudiante</title>
</head>

<body>
    <br>
    <h1 class="text-center bg-black ">Agregar estudiante</h1>
    <br>
    <div class="container">
        <form action="../modelo/insertarestudiante.php" method="POST">
        <input type="hidden" class="form-control" name="IdE" value="<?php echo $row['id_empleado']; ?>">
            <div class="mb-2">
                <label class="form-label">Matricula:</label>
                <input type="number" class="form-control" name="matriculaS">
            </div>
            <div class="mb-2">
                <label class="form-label">Rut:</label>
                <input type="text" class="form-control" name="RutS">
            </div>
            <div class="mb-2">
                <label class="form-label">Nombres Estudiante:</label>
                <input type="text" class="form-control" name="nombreS">
            </div>
            <div class="mb-2">
                <label class="form-label">Apellidos Estudiante:</label>
                <input type="text" class="form-control" name="apellidoS">
            </div>
            <div class="mb-2">
                <label class="form-label">Correo estudiante:</label>
                <input type="email" class="form-control" name="correoS">
            </div>
            <label for="">Carrera</label>
            <select class="form-select mb-3" name="carreraS">
                 <option disabled>--Elegir carrera--</option>
                <option value="ing_inf">Ingeniero Innformatico</option>
                <option value="medicina">Medicina</option>
                <option value="odontologo">Odontologo</option>
            </select>
            <label for="">Sede</label>
            <select class="form-select mb-3" name="sedeS">
                 <option disabled>--Elegir sede--</option>
                <option value="LA">Los Angeles</option>
                <option value="CN">Concepcion</option>
                <option value="CH">Chillan</option>
            </select>
            <label for="">Estado Matricula</label>
            <select class="form-select mb-3" name="estadoS">
                <option disabled>--Elegir sede--</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="inicioestudiante.php" class="btn btn-dark">Regresar</a>
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