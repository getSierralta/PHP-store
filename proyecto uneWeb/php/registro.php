<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/reiniciar.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<title>Login</title>
</head>
<body>
<div id="contenedor">
<?php include "cabezera.php"; ?>
 <div id="contenedorDelMain">
 	<?php include "aside.php";?>
	<div class="registro">		
			 <form action="validacion.php" method="post" class="create">	
				 <table>				 	
				 <tr>				 		
					 <th colspan="3">
					  	<input type="hidden" name="oculto" value="1">		
					  	<br><br><h2 class="sign-up-title">Registrate</h2>
					 </th>
				 </tr>
				 <tr>	
					  <th>								  
					    <label>Nombre</label>
					  </th>
					  <th>
					   	<input type="text" placeholder="Nombre" required name="nombre" class="sign-up-input">
					  </th>	  	
				</tr>
				<tr>	
					  <th>								  
					    <label>Apellido</label>
					  </th>
					  <th>
					   <input type="text" placeholder="Apellido" name="apellido" required class="sign-up-input">
					  </th>	  	
				</tr>
				<tr>	
					  <th>								  
					    <label>Cedula</label>
					  </th>
					  <th>
					   <input type="text" placeholder="Cedula" name="cedula" class="sign-up-input">
					  </th>	  	
				</tr>
				<tr>	
					  <th>								  
					    <label>Email</label>
					  </th>
					  <th>
					   <input type="email" placeholder="Email" required name="correo" class="sign-up-input">
					  </th>	  	
				</tr>
				<tr>
					  <th>				          	 	
						 <label>.   Contraseña      .</label>
					  </th>
					  <th>
						 <input type="password" placeholder="Contraseña" required name="clave" class="sign-up-input">
													
					   </th>
				</tr>		  	
				<tr>
				   <td colspan="5">
					<input type="submit" value="Enviar" class="sign-up-button" >					
				   </td>
				</tr>
				<tr>
				   <td colspan="5">					
						<p> ¿ya estas registrado? </p> <a href="login.php">¡Entra aquí!</a>					
					</td>
				</tr>
			</table>
	  	</form>	
		</div>					
		</main>
	</div>
<?php include "footer.php"; ?>
</div>
</body>
</html>