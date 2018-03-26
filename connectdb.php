<?php
define("HOSTNAME","127.0.0.1");
define("PORT","5431");
define("USER","user");
define("PASS","password");
define("DATABASE","prueba");

$dbhandle=new pg_connect(HOSTNAME,PORT,DATABASE,USER,PASS) or die("Unable to Connect DB")

/*$con = mysqli_connect("localhost", "root", "", "basebanco") or die("fallo la conexion");*/
?>