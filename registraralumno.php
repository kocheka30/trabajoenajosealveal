<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	
</head>
<body>
	 <?php
	 $server = "localhost";
	 $usuario ="root";
	 $contraseña ="";
	 $bdn = "trabajonota2";

	 $conexion = mysqli_connect($server,$usuario,$contraseña,$bdn)
	 or die ("Error en la conexion");

	 $cedula = $_POST['txtcedula'];
	 $nombres = $_POST['txtnombres'];
     $apellidos = $_POST['txtapellidos'];
     $edad = $_POST['txtedad'];
     $fechanacimiento = $_POST['txtfechanacimiento'];
	 $pais = $_POST['txtpais'];
     $ciudad = $_POST['txtciudad'];
     $provincia = $_POST['txtprovincia'];
     $telefono = $_POST['txttelefono'];
     $direccion = $_POST['txtdireccion'];
     $sexo = $_POST['cmbsexo'];

     $insertar = "INSERT INTO  alumnos values ('$cedula','$nombres','$apellidos','$edad','$fechanacimiento','$pais','$ciudad','$provincia','$telefono','$direccion','$sexo')";
                           

     $resultado = mysqli_query($conexion, $insertar)
     or die ("Error al insertar los registros");

     mysqli_close($conexion);
     echo"Datos insertados correctamente";
     ?>
</body>
</html>
