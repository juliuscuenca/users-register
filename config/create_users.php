<?php
//datos conexion
include '../db/conexion_db.php';
$sql=file_get_contents('../sql/create_user.sql');
$result = $conn->query($sql);
if ($result) { echo 'Creacion de usuarios realizado con exito'; };
?>
