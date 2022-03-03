<?php
include 'db/conexion_db.php';
$sql=file_get_contents('sql/user_list.sql');
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    
    while ($row = $result->fetch_assoc()){
        $filas[]=$row;
           
    }
};
//var_dump($filas);
include 'views/user_list_vista.php';
$conn->close();
