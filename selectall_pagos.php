<?php
include "connectdb.php";
$query="select * from pagos_pendientes";
$rs=$dbhandle->query($query);

while ($row = $rs->fetch_array()) {
  $data[] = $row;
}
    print json_encode($data);
?>