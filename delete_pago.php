<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
    $id_pago = $data->id_pago;
    $query = "delete from pagos_pendientes where id_pago= '$id_pago'";
    /*$query="delete a1, a2 from pagos_pendientes as a1 inner join clientes as a2 where
    a1.id_cedulacli=a2.id_cedulacli and a1.id_pago='$id_pago'";*/
    $dbhandle->query($query)
?>