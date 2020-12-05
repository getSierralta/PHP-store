<?php 
if (isset($_SESSION['id']))

    {
      if($_SESSION['tipo'] == 'u')
      { 
 ?>
		<header>
			<header id="logo">
				<div id="log">
					<img src="../img/logo.png">
				</div>
			</header>
			<header id="buscador">
				<div id="barra">
					<div id="carrito"><a href="carrito.php"><img src="../img/carrito.png" id="carritoimg"></a></div>
					<label class="ns"><a href="cerrar.php">Cerrar Sesion</a></label>
				</div>
			</header>
		</header>
		<nav>
			<a href="index1.php"><div class="nav">Inicio</div></a>
			<a href="index1.php"><div class="nav">Quienes Somos</div></a>
			<a href="index1.php"><div class="nav">Ubicacion</div></a>
			<a href="index1.php"><div class="nav">Contacto</div></a>
			<a href="index1.php"><div class="nav">Formas de pago</div></a>
		</nav>
<?php }else{ ?>
		<header>
			<header id="logo">
				<div id="log">
					<img src="../img/logo.png">
				</div>
			</header>
			<header id="buscador">
				<div id="barra">			
					<label class="ns"><a href="crear.php">Crear Producto</a></label>
					<label class="ns"><a href="cerrar.php">Cerrar Sesion</a></label>
				</div>
			</header>
		</header>
		<nav>
			<a href="index1.php"><div class="nav">Inicio</div></a>
			<a href="index1.php"><div class="nav">Quienes Somos</div></a>
			<a href="index1.php"><div class="nav">Ubicacion</div></a>
			<a href="index1.php"><div class="nav">Contacto</div></a>
			<a href="index1.php"><div class="nav">Formas de pago</div></a>
		</nav>
<?php }
}else{ ?>
	<header>
		<header id="logo">
			<div id="log">
				<img src="../img/logo.png">
			</div>
		</header>
		<header id="buscador">
			<div id="barra">
				<label class="ns"><a href="cerrar.php">Iniciar Sesion</a></label>
			</div>
		</header>
	</header>
	<nav>
		<a href="index1.php"><div class="nav">Inicio</div></a>
		<a href="index1.php"><div class="nav">Quienes Somos</div></a>
		<a href="index1.php"><div class="nav">Ubicacion</div></a>
		<a href="index1.php"><div class="nav">Contacto</div></a>
		<a href="index1.php"><div class="nav">Formas de pago</div></a>
	</nav>
<?php } ?>
	