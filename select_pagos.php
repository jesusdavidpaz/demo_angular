<?php
header("Acces-Control-Allow_origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "basebanco");
$result = $conn->query("SELECT * FROM pagos_pendientes");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)){
	if($outp != "") {$outp .= ",";}
	$outp .= '{"id_pago":"' . $rs["id_pago"] . '",';
    $outp .= '"placa":"' . $rs["placa"] . '",';
    $outp .= '"monto":"' . $rs["monto"] . '",';
    $outp .= '"id_cedulacli":"' . $rs["id_cedulacli"] . '",';
	$outp .= '"fecha_pago":"' . $rs["fecha_pago"] . '"}';
}
$outp = '{"records":['.$outp.']}';
$conn->close();
echo ($outp);

/*$rs=$dbhandle->query($query);
while ($row = $rs->fetch_array()){
    $data[]= $row;
}
print json_encode($data);*/
?>