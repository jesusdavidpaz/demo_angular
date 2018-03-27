<?php
header("Acces-Control-Allow_origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn= pg_connect("host='localhost' port='5431' dbname='prueba' user='user' password='password'");
$result = pg_query("SELECT * FROM clientes order by id_cedulacli");
$outp = "";
while($rs = pg_fetch_array($result)){
	if($outp != "") {$outp .= ",";}
	$outp .= '{"id_cedulacli":"' . $rs["id_cedulacli"] . '",';
	$outp .= '"nombre":"' . $rs["nombre"] . '",';
	$outp .= '"apellido":"' . $rs["apellido"] . '",';
	$outp .= '"edad":"' . $rs["edad"] . '",';
	$outp .= '"fecha_nacimiento":"' . $rs["fecha_nacimiento"] . '",';
	$outp .= '"direccion":"' . $rs["direccion"] . '",';
	$outp .= '"correo":"' . $rs["correo"] . '"}';
}
$outp = '{"records":['.$outp.']}';
pg_close();
echo ($outp);

?>