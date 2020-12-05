<?php 	
session_start();
include "conexion.php";
$oculto = $_POST['oculto'];


switch ($oculto){
	case 1: //registrar usuario
        $consultar = "SELECT correo FROM usuario WHERE correo = '$_POST[correo]'";
        $result = mysqli_query($link,$consultar);
        $num = mysqli_num_rows($result);
        if ($num == 0){
        	$clave = md5($_POST['clave']);
  		    $insertar = "INSERT INTO usuario VALUES ('', '$_POST[nombre]', '$_POST[apellido]', '$_POST[cedula]', '$_POST[correo]','$clave', 'u')";
    			mysqli_query($link,$insertar);
    			echo mysqli_error($link);
        }else{
        	echo "el correo ya existe";
        }

		
	break;

    case 2: //iniciar  
        $clave = md5($_POST['clave']);
        $consultar = "SELECT id_usuario, nombre, apellido, tipo FROM usuario WHERE clave = '$clave' and correo ='$_POST[correo]'";
        $result = mysqli_query($link, $consultar);
        echo mysqli_error($link);
        $num = mysqli_num_rows($result);

        if($num>0){
        	$vector = mysqli_fetch_array($result);
        	$_SESSION['id'] = $vector[0];
        	$_SESSION['nombre'] = $vector[1];
        	$_SESSION['apellido'] = $vector[2];
        	$_SESSION['tipo'] = $vector[3];    	
        }else{
        	echo "error en usuario y clave";
        }

    case 3: // crear producto

        $archivo = $_FILES['foto']['name'];
        $ruta = $_FILES['foto']['tmp_name'];
        $tipo = getimagesize($ruta);
       
        if ($tipo[2] == 1 or $tipo[2] == 2 or $tipo[2] == 3) {
        	$insertar = "INSERT INTO producto VALUES ('', '$_POST[nombre]', '$_POST[descripcion]', '$_POST[precio]', 1, '$_POST[cantidad]','$archivo', '$_POST[categoria]')";
            $result = mysqli_query($link, $insertar);
            if (!mysqli_error($link)){
                copy($ruta,'../img/'.$archivo);                
            }
        }else{
            echo "error";
        }
        break;

    case 4: // agregar al carrito 

         $upd="SELECT fk_producto, cantidad from carrito where fk_producto='$_POST[id_producto]' and fk_usuario='$_SESSION[id]'";
          $result= mysqli_query($link,$upd);
          $vector = mysqli_fetch_array($result);
          $cant_invent="SELECT cantidad from producto where id_producto='$_POST[id_producto]'";
          $cantidadi= mysqli_query($link,$cant_invent);
          $vectori = mysqli_fetch_array($cantidadi);
          $cantUser = $_POST['cantidad'];
          if ($vectori[0] >= $cantUser){
              if ($vector[0]>=1) {
                  $modif="UPDATE carrito set cantidad = cantidad + '$cantUser' where fk_usuario='$_SESSION[id]' and fk_producto='$_POSid_producto]'";
                  $result= mysqli_query($link,$modif);
                  echo mysqli_error($link);
              }else{
                  $insert="INSERT into carrito values ('', '$cantUser','$_SESSION[id]','$_POST[id_producto]')";
                  $result= mysqli_query($link,$insert);
                  echo mysqli_error($link);
              }
          }else{
              echo "La cantidad introducida no esta disponible, introduzca una cantidad menor";
          }
    break;
    
    case 5://comprar productos
        $fecha = date('Y-m-d');
        $insertar="INSERT INTO factura VALUES ('', '$fecha', '$_SESSION[id]')";
        mysqli_query($link,$insertar);
        $sql = "SELECT cantidad, fk_producto FROM carrito WHERE fk_usuario = '$_SESSION[id]'";
        $result = mysqli_query($link,$sql);

        $ultimafila = "SELECT max(id_factura) from factura where fk_usuario = '$_SESSION[id]'";
        $res_u = mysqli_query($link,$ultimafila);
        $ultima = mysqli_fetch_array($res_u);
        while($vector = mysqli_fetch_array($result)){
            $deta_fac = "INSERT into detalle_fac values('',  '$vector[0]', '$ultima[0]','$vector[1]')";

            mysqli_query($link,$deta_fac);
            echo mysqli_error($link);

            $update = "UPDATE producto set cantidad = cantidad - '$vector[0]' WHERE id_producto='$vector[1]'";
            mysqli_query($link,$update);
        }
        
        $eliCar = "DELETE from carrito WHERE fk_usuario= '$_SESSION[id]'";
        mysqli_query($link,$eliCar);
        echo mysqli_error($link);
    break;
} 
 ?>
 <meta http-equiv="refresh" content="0;index1.php">
