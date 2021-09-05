<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head  class="header">

<link rel="icon" type="image/ico" href="../img/logo.png" />
<link rel="stylesheet" type="text/css" href="../estilos.css" />
<meta http-equiv="content-type" content="text/html;  charset=utf-8" />
<title>Ingresar Producto</title>
<meta http-equiv="content-language" content="es" />
<link rel="license" type="text/html" href="http://creativecommons.org/licenses/by-sa/4.0/" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

</br>

<font style="margin-left:20px;">



<?php
include("abrir_con.php");

$codigo_producto = $_POST['codigo_prod'];
$nombre_producto = $_POST['nombre_prod'];
$marca_producto = $_POST['marca_prod'];
$precio_compra_producto = $_POST['precio_prod'];
$cantidad_compra_producto = $_POST['cantidad_prod'];

//validar campos vacíos
if ($codigo_producto=='' or $nombre_producto=='' or $marca_producto=='' or $precio_compra_producto=='' or $cantidad_compra_producto==''){
	echo "Debe diligenciar todos los campos.&nbsp&nbsp";
}else{

//validar valor numérico
if(is_numeric($codigo_producto)){
	if(is_numeric($precio_compra_producto)){
		if(is_numeric($cantidad_compra_producto)){
			
			//insertar producto en la base da datos
			$sql = "INSERT INTO tabla36 (codigo_producto,nombre_producto,marca_producto,precio_compra_producto,cantidad_compra_producto) values ('$codigo_producto','$nombre_producto','$marca_producto','$precio_compra_producto','$cantidad_compra_producto')";
            if ($conn->query($sql) === TRUE) {
             echo "El producto se guardó correctamente.&nbsp&nbsp";
            } else {
             echo "Se ha presentado el siguiente error al ingresar producto: <font color='red'>" . $conn->error . ".</font>&nbsp&nbsp";
            }
		
			}else{
	         echo "La cantidad comprada debe ser un valor numérico.&nbsp&nbsp";
            }		
		}else{
	echo "El precio de compra debe ser un valor numérico.&nbsp&nbsp";
    }
}else{
 echo "El código del producto debe ser un valor numérico.&nbsp&nbsp";
}

}

include("cerrar_con.php");
?>

<a href="<?=$_SERVER['HTTP_REFERER'] ?>"><input type="submit" class="btn btn-primary" value="Volver" /></a>

</font>

		
</body>

</html>