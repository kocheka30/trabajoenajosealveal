<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR </title>
	
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

	  $resultado = mysqli_query($conexion,"DELETE from alumnos where cedula ='$cedula'")
     or die ("Error al eliminar registros");

     mysqli_close($conexion);
     echo"Datos eliminados correctamente";
     ?>
</body>
</html>