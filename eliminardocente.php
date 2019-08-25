<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR REGISTRO DE DOCENTE</title>

</head>
<body>
	 <?php
	 $server = "localhost";
	 $usuario ="root";
	 $contraseña ="";
	 $bdn = "trabajonota2";

	 $conexion = mysqli_connect($server,$usuario,$contraseña,$bdn)
	 or die ("Error en la conexion");

	 $cedula= $_POST['txtcedula'];

	  $resultado = mysqli_query($conexion,"DELETE from docentes where cedula ='$cedula'")
     or die ("Error al eliminar registros");

     mysqli_close($conexion);
     echo"Datos eliminados correctamente";
     ?>
</body>
 
  
</html>
<html>
<head>
	<title></title>
</head>
<body>
 <ul>
  <li><a href="docentes.php">volver</a></li>

</body>
</html>
<head>
	
	
</head>
<body>
    <form