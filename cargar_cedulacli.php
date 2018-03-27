<?php  
 $cadena="host='localhost' port='5431' dbname='prueba' user='user' password='password'";  //$connect = pg_connect("127.0.0.1", "5431", "prueba", "user","password");  
 $output = array();  
 $query = "SELECT * FROM clientes ORDER BY id_cedulacli ASC";  
 $result = pg_query($connect, $query);  
 while($row = pg_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  