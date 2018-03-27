<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
$id_cedulacli=$data->id_cedulacli;
$nombre=$data->nombre;
$apellido=$data->apellido;
$edad=$data->edad;
$direccion=$data->direccion;
$correo=$data->correo;
$fecha_nacimiento=$data->fecha_nacimiento;
$query="insert into clientes (nombre,apellido,edad,direccion,correo,fecha_nacimiento) values ('".$nombre."','".$apellido."','".$edad."','".$direccion."','".$correo."','".$fecha_nacimiento."')";
pg_query($query);
?>

