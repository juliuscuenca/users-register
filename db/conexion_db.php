<?php
include 'datos_conexion.php';
$conn =new mysqli($servidor,$usuario,$password,$basedatos);

if($conn -> connect_error){
    echo 'Error al conectar con la base de datos';
}
?>