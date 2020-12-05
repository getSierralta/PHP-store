<?php
 session_start();
 include 'conexion.php';
 $categoria = $_GET['categoria'];
 $consultar = "SELECT nombre,descripcion, precio, foto, id_producto, cantidad FROM producto WHERE categoria ='$categoria'";
 $resultado = mysqli_query($link,$consultar);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/reiniciar.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">	
	<title><?php echo $categoria ?></title>
</head>
<body>
<div id="contenedor">
<?php include "cabezera.php"; ?>
 <div id="contenedorDelMain">
 	<?php include "aside.php"; 	?>
 	<main class="espacioProductos">
 		<?php
			 if (isset($_SESSION['id'])){
			    if($_SESSION['tipo'] == 'u')
			      { 
			      	while($vector=mysqli_fetch_array($resultado)){?>   
						<article class="productos2">
							<div class="contenido2">
								<img src="../img/<?php echo $vector[3];?>" alt="<?php echo $vector[3];?>">
							</div>
							<div class="fproductos2">
								<p>Nombre: <?php echo $vector[0];?></p>
								<p>Precio: <?php echo $vector[2];?></p>	
								<p>Cantidad: <?php echo $vector[5];?></p>	
								<form action="validacion.php" method="post">  
									<input type="number" name="cantidad" class="cantidadI" required>
									<input type="hidden" name="oculto" value="4">
									<input type="hidden" name="id_producto" value="<?php echo $vector[4];?>">
				              		<input type="submit" name="carrito" value="" class="button">
			              		</form>
							</div>
						</article>		
		<?php }?>
					</main>
		<?php
				}else{
					while($vector=mysqli_fetch_array($resultado)){ ?>				
						<article class="productos2">				
							<div class="contenido">
								<img src="../img/<?php echo $vector[3];?>" alt="<?php echo $vector[3];?>">
							</div>
							<footer class="fproductos">
								<p>Nombre: <?php echo $vector[0];?></p>
								<p>Precio: <?php echo $vector[2];?></p>	
								<p>Cantidad: <?php echo $vector[5];?></p>	
								<form action='' method="post">
				                  	<input type="hidden" name="id_producto" value="<?php echo $vector[5] ?>">
				                  	<input type="submit" name='eliminar' value="Eliminar" class="buttonE">
				                </form>   
							</footer>
						</article>		
		<?php }	}	 
			}else{
				while ($vector = mysqli_fetch_array($resultado)){?>   
					<article class="productos2">			
						<div class="contenido">
							<img src="../img/<?php 
					        			echo $vector[3];?>" alt="<?php 
					        			echo $vector[3];?>">
						</div>
						<div class="fproductos">
							<p>Nombre: <?php echo $vector[0];?></p>
							<p>Precio: <?php echo $vector[2];?></p>	
							<p>Cantidad: <?php echo $vector[5];?></p>		        
						</div>
					</article>		
		<?php }
		}?>
	</main>
 </div>
<?php include "footer.php"; ?>
</div>
</body>
</html>