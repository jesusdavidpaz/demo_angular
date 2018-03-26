<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
    $id_cedulacli = $data->id_cedulacli;
    $query = "delete from clientes where id_cedulacli='".$id_cedulacli."'";
    $dbhandle->query($query)
?>