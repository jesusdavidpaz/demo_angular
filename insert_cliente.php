<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
$id_cedulacli=$dbhandle->real_escape_string($data->id_cedulacli);
$nombre=$dbhandle->real_escape_string($data->nombre);
$apellido=$dbhandle->real_escape_string($data->apellido);
$query="insert into clientes (id_cedulacli,nombre,apellido) values ('".$id_cedulacli."','".$nombre."','".$apellido."')";
$dbhandle->query($query);
?>

