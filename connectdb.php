<?php


$Nombre="";
$Apellido="";
$Edad="";
$Fecha_nacimiento="";
$Direccion="";
$Correo="";
$ID=0;
$editar=false;
$db=pg_connect("host=127.0.0.1 port=5431 dbname=prueba user=user password=password") or die("Unable to Connect DB");

//bton guardar
if(isset($_POST['insertar'])){
    $ID=$_POST['id_cedulacli'];
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    $Edad=$_POST['edad'];
    $Fecha_nacimiento=$_POST['fecha_nacimiento'];
    $Direccion=$_POST['direccion'];
    $Correo=$_POST['correo'];
   pg_query($db,"insert into clientes (nombre,apellido,edad,direccion,correo,fecha_nacimiento) values ('".$Nombre."','".$Apellido."','".$Edad."','".$Direccion."','".$Correo."','".$Fecha_nacimiento."')");
   header('location:cliente.php');
}
if (isset($_POST['editar'])) {
$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];    
$ID=$_POST['id_cedulacli'];
$Edad=$_POST['edad'];
$Direccion=$_POST['direccion'];
$Correo=$_POST['correo'];
$Fecha_nacimiento=$_POST['fecha_nacimiento'];
pg_query($db, "update clientes set nombre='".$Nombre."',apellido='".$Apellido."', edad='".$Edad."', direccion='".$Direccion."', fecha_nacimiento='".$Fecha_nacimiento."' where id_cedulacli='".$ID."'");
header('location:cliente.php');
}

if(isset($_GET['eliminar'])){
    $ID=$_GET['eliminar'];
    pg_query($db,"delete from clientes where id_cedulacli='".$ID."'");
    header('location:cliente.php');
}

$result=pg_query($db,"select * from clientes");
?>