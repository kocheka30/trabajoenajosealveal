<!DOCTYPE html>
<html>
<head>
	<title>registro de modulos</title>
	
</head>
<body><p>REGISTRO DE MODULOS</p>
	<form  action="registrar_modulos.php" method="POST"> 
        nombres:<label><input type="text" name="txtnombres"></label>
        
        carrera:<label><input type="text" name="txtapellidos"></label><br>
        <br>
       
       
        semestre :<label><input type="text" name="txtsemestre"></label><br>
        <br>
        
        sede:<label><input type="text" name="txtsede"></label>
        
       
        inicio:<label><input type="text" name="txtinicio"></label><br>
        <br>
        
        termino:<label><input type="text" name="txttermino"></label><br>
        <br>
        sala:<label><input type="text" name="txtsala"></label>
        blocke:<label><input type="text" name="txtblocke"></label><br>
        <br>
        <input type="submit" value="Registrar"   name="btnregistrar">
        <br>
        <br>
         <li><a href="menu.php">volver al menu principal</a></li>

    </form>


     <p>-------------------------------------------------------------------</p>
    <form  action="eliminar_modulo.php" method="POST"     >
        
     cedula:<input type="text" name="txtnombres"><br/>
     <br>
     <br>
     <input type="submit" value="eliminar registro"   name="btneliminar">
     <br>
     <br>
    </form>
 <p>-------------------------------------------------------------------</p>
   
     <li><a href="actualizarmodulo.php">ACTUALIZAR</a></li>
</body>
</html>
