<?php
//datos conexion
include '../db/conexion_db.php';
$sql=file_get_contents('../sql/create_table_users.sql');
$result = $conn->multi_query($sql);
if ($result) {echo 'Creaccion de tabla realizada con exito';}
?>
