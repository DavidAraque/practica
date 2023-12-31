<?php 
error_reporting(0);
if ($_POST['accion'] == 'Obtenerestudiante') {
    $rutestudiante = $_POST['datos'];
    //include('http://localhost/practica/config/conexion.php');
    
//datos para la conexion
$host = "localhost";
$user = "root";
$pass = "";
$db = "practica";
$conexion = new mysqli($host,$user,$pass,$db);

if (!$conexion){
    echo 'Conexion fallida';
}
    try {

       if ($resultado = mysqli_query($conexion,"SELECT * FROM estudiante WHERE rut_estudiante = '".$rutestudiante."'")) {
        $respuesta = mysqli_fetch_array($resultado);
        $respuesta = array(
            'codigo' => 0,
            'matricula' => $respuesta['matricula'],
            'rut' => $respuesta['rut_estudiante'],
            'nombres' => $respuesta['nombre_estudiante'],
            'apellidos' => $respuesta['apellido_estudiante'],
            'correo' => $respuesta['correo_estudiante'],
            'carrera' => $respuesta['carrera'],
        );
    } else {
        $respuesta = array(
            'codigo' => 1,
            'respuesta' => 'No se Obtuvieron Datos',
        );
    }

    }catch (Exception $e) {
        echo " Error " . $e->getMessage();
    }

    die(json_encode($respuesta));
    
}


if ($_POST['accion'] == 'VerServicios') {
    //include('http://localhost/practica/config/conexion.php');

    $host = "localhost";
$user = "root";
$pass = "";
$db = "practica";
$conexion = new mysqli($host,$user,$pass,$db);

if (!$conexion){
    echo 'Conexion fallida';
}

                $query = mysqli_query($conexion, "SELECT id_especialidad,nombre_especialidad,letra_especialidad from especialidad where estado='A'");
                $datos = array();
                while ($row = $query->fetch_assoc()) {
                    $datos[] = $row;
                }

                $arraData = $datos;
                if(empty($arraData)){
                    $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados');
                }else{
                    $arrResponse = array('status' => true, 'data' => $arraData);
                }
                echo json_encode($arrResponse);
         
            die();
}





if ($_POST['accion'] == 'GenerarTurno') {
    $datos[]=$_POST['datos'];

    
    $matricula =$datos[0] ;
    $id_especialdiad =$datos[1] ;
   $letra =$datos[2] ;
 //  $id_especialdiad = $datos->id_especialidad;
   // $letra = $datos->letra;
    if (empty($matricula) ) {
        $respuesta = array(
            "codigo" => 2,
            "respuesta" => 'Verificar los Campos Vacios',
        );
    } else {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "practica";
        $conexion = new mysqli($host,$user,$pass,$db);
//aqui traemos los valores para buscar el ultimo turno en db

        try {
            $turno = $conexion->query("SELECT MAX(id_turno) AS nturno, letra_atencion AS latencion,  numero_atencion + 1 AS natencion FROM turno  ");
            $turno = array();
                while ($row = $query->fetch_assoc()) {
                    $turno['natencion'] = $row['natencion'] ;
                }
                $nturno = $turno['natencion'] ;
                echo  $nturno ;
      //insertar turno en la base datos
            $resultado  = $conexion->query("INSERT INTO turno (numero_atencion,matriculaid,especialidadid) VALUES ('$nturno','$matricula','$id_especialdiad')");
            if ($resultado > 0) {
                $respuesta = array(
                    'codigo' => 0,
                    'respuesta' => 'Turno Generado Correctamente',
                    'turno' => $turno
                );
            } else {
                $respuesta = array(
                    'codigo' => 1,
                    'respuesta' => 'No se Logro Registro el Turno',
                );
            }
        } catch (Exception $e) {
            echo " Error " . $e->getMessage();
        }
    }
    die(json_encode($respuesta));
}
