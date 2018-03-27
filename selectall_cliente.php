<?php
include "connectdb.php";
$query="select * from clientes order by id_cedulacli";
$rs=pg_query($query);

while ($row = pg_fetch_array($rs)) {
  $data[] = $row;
}
    print json_encode($data);
?>
