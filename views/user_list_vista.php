<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Listado de usuarios</h1>
<table>
  <tr>
    <th> Id </th>  
    <th> Nombre </th>  
    <th> E-mail </th>  
    <th> Contraseña </th>  
    <th> Estado </th>  
    <th> Fecha creacion </th>  
    <th> Fecha modificacion </th>  
</tr>
<?php
for ($i=0; $i<count($filas);$i++) {
    $id=$filas[$i]['user_id'];
    $name=$filas[$i]['user_name'];
    $email=$filas[$i]['user_email'];
    $pasword=$filas[$i]['user_password'];
    $state=$filas[$i]['user_state'];
    $fecha_cre=$filas[$i]['user_time_created'];
    $fecha_act=$filas[$i]['usuario_time_updated'];
?>
<tr>    
  <td> <?php echo $id ?> </td>
  <td> <?php echo $name ?> </td>
  <td> <?php echo $email ?> </td>
  <td> <?php echo $pasword ?> </td>
  <td> <?php echo $state ?> </td>
  <td> <?php echo $fecha_cre ?> </td>
  <td> <?php echo $fecha_act ?> </td>
</tr>
<?php
}
?>
</body>
</html>
