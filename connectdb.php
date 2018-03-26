<?php
$cadena="host='127.0.0.1', port='5431', dbname='prueba', user='user', password='password'";
$dbhandle=new pg_connect($cadena) or die("Unable to Connect DB");

/*$con = mysqli_connect("localhost", "root", "", "basebanco") or die("fallo la conexion");*/
?>