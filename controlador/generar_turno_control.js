var uribase = 'http://localhost/practica/'
$('#verdatoscliente').hide();
function BuscarCliente() {
    servicios();
    var rutestudiante = document.getElementsByName('rutestudiante')[0].value;
    
    $.ajax({
        method: 'POST',
        datatype: 'json',
        data: {
            'accion': 'Obtenerestudiante',
            'datos': rutestudiante
        },
        url: uribase+ 'modelo/generar_turno.php',
    })
        .then(function (response) {
            var Data = JSON.parse(response);
            if (Data.codigo == 0) {
                $('#verdatoscliente').show();
                $("#matricula").attr('disabled', 'disabled').val(Data.matricula);
                $("#rut").attr('disabled', 'disabled').val(Data.rut);
                $("#nombres").attr('disabled', 'disabled').val(Data.nombres);
                $("#apellidos").attr('disabled', 'disabled').val(Data.apellidos);
                $("#correo").attr('disabled', 'disabled').val(Data.correo);
                $("#carera").attr('disabled', 'disabled').val(Data.carera);
                $("#registrarcliente").attr('disabled', 'disabled').val("NO");

            } else if (Data.codigo == 1) {
                $('#verdatoscliente').show();
                Swal.fire({
                    title: 'Notificacion!',
                    position: 'center',
                    icon: 'info',
                    text: 'No hay datos para mostrar por favor llenar los campos',
                    showConfirmButton: false,
                    timer: 2000
                });
                $("#matricula").attr('disabled', 'disabled').val();
                $("#rut").attr('disabled', 'disabled').val(rutestudiante);
                $("#nombres").removeAttr('disabled').val();
                $("#apellidos").removeAttr('disabled').val();
                $("#correo").removeAttr('disabled').val();
                $("#carera").removeAttr('disabled').val();
                $("#registrarcliente").attr('disabled', 'disabled').val("SI");
            } else {
                Swal.fire({
                    title: 'Notificacion!',
                    position: 'center',
                    icon: 'error',
                    text: 'No hay datos para mostrar',
                    showConfirmButton: false,
                    timer: 2000
                });
            }
        });
}


function servicios() {
    $("#contedinoservicios").empty();
    $.ajax({
        method: "POST",
        datatype: "json",
        data: {
            "accion": "VerServicios"
        },
        url: uribase+ "modelo/generar_turno.php",
    }).then(function (response) {
        var datos = JSON.parse(response);
        if (datos.status == true) {
            var container = document.getElementById('contedinoservicios');
            for (var i = 0; i < datos.data.length; i++) {
                container.innerHTML += `
                <div class="col-md-4 col-lg-3 mb-2">
                <a style="cursor: pointer;" onClick="Generar_Turno('${encodeURIComponent(JSON.stringify(datos.data[i]))}')">
            <div class="card text-center bg-transparent border">
            <div class="card-body">

              <h3 class="card-title mb-2 mt-4">${datos.data[i].nombre_especialidad}</h3>
            </div>
          </div>
          </a>
          </div>`;
            }
        }
    });
}







function Generar_Turno(serv) {
    var datoservicio = JSON.parse(decodeURIComponent(serv))
    var Datos = {
        matricula: document.getElementsByName('matricula')[0].value,
        rut: document.getElementsByName('rut')[0].value,
        nombres: document.getElementsByName('nombres')[0].value,
        apellidos: document.getElementsByName('apellidos')[0].value,
        correo: document.getElementsByName('correo')[0].value,
        carera: document.getElementsByName('carera')[0].value,
        registrarcliente: document.getElementsByName('registrarcliente')[0].value,
        id_especialidad:datoservicio.id_especialidad,
        letra:datoservicio.letra_especialidad,//REVISAR AQUI datos.id_especialidad
    }
    console.log(Datos);
    if (Datos.matricula == "" || Datos.matricula == null || Datos.matricula == undefined ||
        Datos.rut == "" || Datos.rut == null || Datos.rut == undefined ||
        Datos.nombres == "" || Datos.nombres == null || Datos.nombres == undefined ||
        Datos.apellidos == "" || Datos.apellidos == null || Datos.apellidos == undefined ||
        Datos.correo == "" || Datos.correo == null || Datos.correo == undefined ||
        Datos.carera == "" || Datos.carera == null || Datos.carera == undefined) {
        Swal.fire({
            title: 'Notificacion!',
            position: 'center',
            icon: 'info',
            text: 'Todos Los Campos Son Requeridos',
            showConfirmButton: false,
            timer: 1500
        });
    } else {
            $.ajax({
                method: 'POST',
                datatype: 'json',
                data: {
                    'accion': 'GenerarTurno',
                    'datos': JSON.stringify(Datos)
                },
                url: uribase+ 'modelo/generar_turno.php',
            })
                .then(function (response) {
                    var Data = JSON.parse(response);
                    if (Data.codigo == 0) {
                        $('#verdatoscliente').hide();
                        $("#matricula").removeAttr('disabled').val();
                        $("#rut").removeAttr('disabled').val();
                        $("#nombres").removeAttr('disabled').val();
                        $("#apellidos").removeAttr('disabled').val();
                        $("#correo").removeAttr('disabled').val();
                        $("#carera").removeAttr('disabled').val();
                        $("#registrarcliente").removeAttr('disabled').val();
                        $("#rutestudiante").val();
                        Swal.fire({  //REVISAR AQUI
                            icon: 'success',
                            title: ' Su Numero De Turno:',
                            html: '<div class="btn">' +
                                '<span  class="badgediseturnodiseturnos"><h1 style="color:white">' + Data.turno + '</h1></span>' +
                                '</div>',
                            allowOutsideClick: false
                        })
                    } else {
                        Swal.fire({
                            title: 'Notificacion!',
                            position: 'center',
                            icon: 'error',
                            text: 'No Se Logro Generar el Turno',
                            showConfirmButton: false,
                            timer: 2000
                        });
                    }
                });
    }
}