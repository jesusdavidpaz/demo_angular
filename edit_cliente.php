<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
$id_cedulacli=$dbhandle->real_escape_string($data->id_cedulacli);
$nombre=$dbhandle->real_escape_string($data->nombre);
$apellido=$dbhandle->real_escape_string($data->apellido);
$query="update clientes set nombre='".$nombre."', apellido='".$apellido."' where id_cedulacli='".$id_cedulacli."'";
$dbhandle->query($query);
?>