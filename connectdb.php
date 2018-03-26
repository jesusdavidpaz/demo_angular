<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","basebanco");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to Connect DB")

/*$con = mysqli_connect("localhost", "root", "", "basebanco") or die("fallo la conexion");*/
?>