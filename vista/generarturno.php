<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../assets/css/sweetalert2.min.css"/>
    <title>Agregar Turno</title>
</head>

<body>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Generar Turno</h5>
        <div class="card-body">

            <div class="row mb-4">
                <div class="col-4">
                    <input type="text" id="rutestudiante" name="rutestudiante" class="form-control"
                        placeholder="Numero Rut" required />
                </div>
                <div class="col-4">
                    <button type="button" Onclick="BuscarCliente()" class="btn btn-primary float-right">Buscar</button>
                </div>
            </div>
            <div id="verdatoscliente">
                <div class="row">
                    <div class="col-6 mb-2">
                        <label class="form-label">matricula</label>
                        <input type="text" id="matricula" name="matricula" class="form-control" />
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">rut</label>
                        <input type="text" id="rut" name="rut" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mb-2">
                        <label class="form-label">nombres</label>
                        <input type="text" id="nombres" name="nombres" class="form-control" />
                    </div>
                    <div class="col-3 mb-2">
                        <label class="form-label">apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" />
                    </div>
                    <div class="col-3 mb-2">
                        <label class="form-label">correo</label>
                        <input type="text" id="correo" name="correo" class="form-control" />
                    </div>
                    <div class="col-3 mb-2">
                        <label class="form-label">carrera</label>
                        <input type="text" id="carrera" name="carrera" class="form-control" />
                        <input type="hidden" id="registrarcliente" name="registrarcliente" />
                    </div>
                </div>
                <div id="contedinoservicios" class="row mt-4">

                </div>
            </div>
        </div>
    </div>
</div>

<script src="../controlador/generar_turno_control.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
 <script src="../assets/js/sweetalert2.all.min.js"></script>

</body>

</html>