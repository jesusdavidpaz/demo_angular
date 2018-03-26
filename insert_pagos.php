<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
$id_cedulacli=$dbhandle->real_escape_string($data->id_cedulacli);
$placa=$dbhandle->real_escape_string($data->placa);
$monto=$dbhandle->real_escape_string($data->monto);
$fecha_pago=$dbhandle->real_escape_string($data->fecha_pago);
$id_pago=$dbhandle->real_escape_string($data->id_pago);
$query="insert into pagos_pendientes (id_cedulacli,placa,monto,fecha_pago,id_pago) values ('".$id_cedulacli."','".$placa."','".$monto."','".$fecha_pago."','".$id_pago."')";
$dbhandle->query($query);
?>
