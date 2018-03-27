<?php
include "connectdb.php";
$query="select * from pagos_pendientes";
$rs=$dbhandle->pg_query($query);

while ($row = $rs->pg_fetch_array()) {
  $data[] = $row;
}
    print json_encode($data);
?>