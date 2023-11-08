<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "practica";

$conexion = new mysqli($host,$user,$pass,$db);

if (!$conexion){
    echo 'Conexion fallida';
}