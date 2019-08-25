<!DOCTYPE html>
<html>
<head>
	<title>Registrar alumno</title>
	                   <p> <th>  REGISTRO DE DOCENTES  </th></p>
</head>
<body>

</head>
<body>
 
    <form  action="registrar_docente.php" method="POST"> 
        nombres:<label><input type="text" name="txtnombres"></label>
        
        apellidos:<label><input type="text" name="txtapellidos"></label><br>
        <br>
        Edad:<label><input type="text" name="txtedad"></label>
        
       
        cedula :<label><input type="text" name="txtcedula"></label><br>
        <br>
        
        Teléfono:<label><input type="text" name="txttelefono"></label>
        
       
        Dirección:<label><input type="text" name="txtdireccion"></label><br>
        <br>
        
        Fecha de Nacimiento:<label><input type="text" name="txtfechanacimiento"></label><br>
        <br>
        País:<label><input type="text" name="txtpais"></label>
        Ciudad:<label><input type="text" name="txtciudad"></label><br>
        <br>
        Provincia:<label><input type="text" name="txtprovincia"></label>
       
        Profesión :<label> <input type="text" name="txtprofesion"></label><br>
        <br>
        Posgrados : <label><input type="text" name="txtposgrado"></label>
        
        Sexo:
        <select name="cmbsexo">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select><br>
        <br>
    <input type="submit" value="Registrar"   name="btnregistrar">
    <br>
    <br>
    </form>
    <form  action="eliminardocente.php" method="POST">
        
     clave:<input type="text" name="txtcedula"><br/>
     <br>
     <input type="submit" value="eliminar registro"   name="btneliminar">
     <br>
     <br>
      <li><a href="menu.php">volver al menu principal</a></li>

    </form>

  