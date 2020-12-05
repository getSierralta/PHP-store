<?php
session_start();
 include 'conexion.php';
 $consultar = "SELECT p.foto, p.nombre, p.precio, p.descripcion, c.cantidad, p.id_producto
	FROM producto as p, carrito as c, usuario as u 
	WHERE c.fk_usuario = u.id_usuario and c.fk_producto = p.id_producto and u.id_usuario = '$_SESSION[id]'";

  $resultado = mysqli_query($link,$consultar);
  echo mysqli_error($link);
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
	<title>Carrito de compra</title>
</head>
<body>
<div id="contenedor">
<?php include "cabezera.php"; ?>
 <div id="contenedorDelMain">
 <?php include "aside.php";	?>
	<div class="espacioProductos">
			
	<?php  
        $acum = 0;
        while($vector=mysqli_fetch_array($resultado)){ 
          $total=$vector[2] * $vector[4];
          $acum= $acum + $total;
    ?>
    	   <input type="hidden" name="oculto" value="4">			
		   <article class="productos2">				
		   	<div id="contenido">
		   		<img src="../img/<?php echo $vector[0]?>">
		   	</div>				
		   	<footer class="fproductos">
		   		<p>Nombre: <?php echo $vector[1]?></p>	
		   		<p>Precio: <?php echo $vector[2]?></p>
		   		<p>Cantidad: <?php echo $vector[4]?> </p>	
		   		<form action='' method="post">
                  	<input type="hidden" name="id_producto" value="<?php echo $vector[5] ?>">
                  	<input type="submit" name='eliminar' value="Eliminar" class="buttonE">
                </form>              		
		   	</footer>
		   </article>
	<?php } ?>	
	<div class="total">
		<p>Total acumulado: <?php echo $acum; ?></p>
		<form action="validacion.php" method="post">
 			<input type="hidden" name="id_producto" value="<?php echo $vector[5] ?>"> 			
  			<input type="hidden" name='oculto' value="5">
  			<input type="submit" name='comprar' value="Comprar" class="buttonE">
		</form>
	</div>
	</div>	
	
  </div>
<?php include "footer.php" ?>
</div>
</body>
</html>
<?php 
if (isset($_POST['eliminar']))
{
  $eliminar="DELETE from carrito where fk_producto='$_POST[id_producto]' and fk_usuario='$_SESSION[id]'";
  $result= mysqli_query($link,$eliminar);
}
?>