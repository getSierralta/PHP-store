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
	<title>Login</title>
</head>
<body>

<div id="contenedor">
<?php include "cabezera.php";
 ?>
 <div id="contenedorDelMain">
 	<?php include "aside.php";
 	?>
	<div class="login">
		<form action="validacion.php" method="post" class="sign-up">	
			<table>
				<tr>
					<th>
					 	<input type="hidden" name="oculto" value="2">
						<h2 class="sign-up-title">LOGIN</h2>
					</th>
				</tr>
				<tr>
					<th>
						 <input type="email" placeholder="Email" required name="correo" class="sign-up-input">
					</th>
				</tr>
				<tr>
					<th>
						<input type="password" placeholder="Contraseña" required name="clave" class="sign-up-input">
					</th>
				</tr>
				<tr>
					<th>
						<a href="registro.php">Registrarse</a>
					</th>
					
				</tr>
				
				<tr>
					<th>
						<input type="submit" name="submit" value="Entrar" class="sign-up-button">
					</th>
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