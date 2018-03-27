<?php include('connectdb.php');
if (isset($_GET['editar'])) {
    $ID=$_GET['editar'];
$rec=pg_query($db, "select * from clientes where id_cedulacli='".$ID."'");
$record=pg_fetch_array($rec);
$editar=true;
$Nombre=$record['nombre'];
$Apellido=$record['apellido'];
$ID=$record['id_cedulacli'];
$Edad=$record['edad'];
$Fecha_nacimiento=$record['fecha_nacimiento'];
$Direccion=$record['direccion'];
$Correo=$record['correo'];

}

?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 

 <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

   
<title>Clientes</title>
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark " id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">Clientes </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          
        </ul>
      </div>
    </div>
  </nav>
<br/><br/>

<center> <h1>GESTION DE CLIENTES</h1>  </center>
 
 <center><img src="http://www.revistaemprende.cl/wp-content/uploads/2016/02/Satisfaccion-cliente.jpg" title="cliente" alt="cliente"></center>
               
<br/>
      
       <center>     <form method="post" action="connectdb.php">
                               <input type="hidden" name="id_cedulacli" value="<?php echo $ID;?>">   
                                <label class="col-form-label">ID_CEDULA:</label>
                                <input type="text" class="form-control" value="<?php echo $ID;?>" name="id_cedulacli" placeholder="Ingrese su cedula" style="width:30%">
                                <br/>
                                <label class="col-form-label"> NOMBRE:</label> 
                                <input type="text" class="form-control"  value="<?php echo $Nombre;?>" name="nombre" placeholder="Ingrese su nombre" style="width:30%">
                                <br/>
                                <label class="col-form-label"> APELLIDO:</label> 
                                <input type="text" class="form-control"  value="<?php echo $Apellido;?>" name="apellido" placeholder="Ingrese su apellido" style="width:30%">
                                <br/>
                                <label class="col-form-label"> EDAD:</label> 
                            <input type="text" class="form-control"  value="<?php echo $Edad;?>" name="edad"  placeholder="Ingrese su edad" style="width:30%">
                            <br/>
                            <label class="col-form-label"> FECHA_NACIMIENTO:</label>         
                            <input type="text" class="form-control"  value="<?php echo $Fecha_nacimiento;?>" name="fecha_nacimiento" placeholder="YYYY/MM/DD" style="width:30%">
                            <br/>
                            <label label class="col-form-label"> DIRECCION:</label> 
                            <input type="text" class="form-control"  value="<?php echo $Direccion;?>" name="direccion"  placeholder="Ingrese su direccion" style="width:30%">
                            <br/>
                            <label label class="col-form-label"> CORREO_ELECTRONICO:</label> 
                            <input type="text" class="form-control"  value="<?php echo $Correo;?>" name="correo"  placeholder="Ingrese su e-mail" style="width:30%">
                            
                            <br/>
            <?php if ($editar==false): ?> 
            <button type="submit" class="btn btn-primary" style="width:30%" name="insertar">Registrar</button>
            <?php else: ?>   
            <button type="submit" class="btn btn-success" style="width:30%" name="editar">Actualizar</button>
            <?php endif ?>
            </form>        </center>                             
                          <br/>
            <div class="row" align="center">
    <div class="col-md-12">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id_cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Correo_Electronico</th>
            <th>Fecha_Nacimiento</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($row=pg_fetch_array($result)){?>
            <td><?php echo $row['id_cedulacli']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['fecha_nacimiento']; ?></td>
            <td><a href="cliente.php?eliminar=<?php echo $row['id_cedulacli']; ?>"><button type="button" class="btn btn-dark" >Eliminar</button></a></td>
            <td><a href="cliente.php?editar=<?php echo $row['id_cedulacli']; ?>"><button type="button" class="btn btn-dark" >Editar</button></a></td> 
            </tr>
 <?php  }?>
</tbody>
        </table>
</div>
</div>
</body>
</html>