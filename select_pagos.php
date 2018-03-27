<?php
header("Acces-Control-Allow_origin: *");
header("Content-Type: application/json; charset=UTF-8");
$cadena="host='localhost' port='5431' dbname='prueba' user='user' password='password'";
$conn = new pg_connect($cadena);
$result = $conn->pg_query("SELECT * FROM pagos_pendientes");
$outp = "";
while($rs = $result->pg_fetch_array(MYSQLI_ASSOC)){
	if($outp != "") {$outp .= ",";}
	$outp .= '{"id_pago":"' . $rs["id_pago"] . '",';
    $outp .= '"placa":"' . $rs["placa"] . '",';
    $outp .= '"monto":"' . $rs["monto"] . '",';
    $outp .= '"id_cedulacli":"' . $rs["id_cedulacli"] . '",';
	$outp .= '"fecha_pago":"' . $rs["fecha_pago"] . '"}';
}
$outp = '{"records":['.$outp.']}';
$conn->pg_close();
echo ($outp);

/*$rs=$dbhandle->query($query);
while ($row = $rs->fetch_array()){
    $data[]= $row;
}
print json_encode($data);*/
?>