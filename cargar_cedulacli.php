<?php  
 $connect = mysqli_connect("localhost", "root", "", "basebanco");  
 $output = array();  
 $query = "SELECT * FROM clientes ORDER BY id_cedulacli ASC";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  