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
$query="update clientes set nombre='".$nombre."', apellido='".$apellido."', edad='".$edad."', direccion='".$direccion."', correo='".$correo."',fecha_nacimiento='".$fecha_nacimiento."' where id_cedulacli='".$id_cedulacli."'";
pg_query($query);
?>