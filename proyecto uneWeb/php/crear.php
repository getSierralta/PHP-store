<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/reiniciar.css">
	<link rel="stylesheet" type="text/css" href="../css/styleLogin.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<title>Crear Producto</title>
</head>
<body>

<div id="contenedor">
<?php include "cabezera.php";
 ?>
 <div id="contenedorDelMain">
 	<?php include "aside.php";
 	?>
	<div class="crear">

	<form action="validacion.php" method="post" enctype="multipart/form-data" class="create">	
			 <table>
				 <tr>
					  <th colspan="3" class="sign-up-title"><br>Agregar Producto<br><br></th>
					  <input type="hidden" name="oculto" value="3">
				 </tr>				 		
				 <tr>	
					  <td> Nombre Del Producto</td>
					  <td><input type="text" placeholder="Nombre" required name="nombre" class="sign-up-input"></td>	  	
				</tr>
				<tr>	
					  <td>Descripcion Del Producto</td>
					  <td><input type="textarea" placeholder="Descripcion" name="descripcion" required class="sign-up-input"></td>	  	
				</tr>
				<tr>	
					  <td>Precio </td>
					  <td><input type="text" placeholder="Precio" name="precio" class="sign-up-input"></td>	  	
				</tr>
				<tr>	
					  <td>Cantidad</td>
					  <td><input type="number" placeholder="Cantidad" required name="cantidad" class="sign-up-input"></td>	  	
				</tr>
				<tr>
				<tr>	
					  <td>Categoria</td>
					  <td><input type="text" placeholder="Categoria" required name="categoria" class="sign-up-input"></td>	  	
				</tr>
				<tr>
					  <td> Foto</td>
					  <td><input type="file" required name="foto" ></td>
			     </tr>				     
					  <th colspan="3">		
					  	<br><br><input type="submit" value="Enviar" name="submit" class="sign-up-button">						
					  </th>
			    </tr>
			</table>
		</form>
	</div>
	</div>
	<?php include "footer.php" ?>
</div>

</body>
</html>