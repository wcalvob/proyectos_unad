<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head  class="header">

<link rel="icon" type="image/ico" href="../img/logo.png" />
<link rel="stylesheet" type="text/css" href="../estilos.css" />
<meta http-equiv="content-type" content="text/html;  charset=utf-8" />
<title>Eliminar Producto</title>
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

if(is_numeric($codigo_producto)){

$sql = "SELECT codigo_producto FROM tabla36 WHERE codigo_producto = $codigo_producto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
$sql = "DELETE FROM tabla36 WHERE codigo_producto=$codigo_producto";

if ($conn->query($sql) === TRUE) {
    echo "El producto se eliminó correctamente.&nbsp&nbsp";
} else {
    echo "Se ha presentado el siguiente error al ingresar producto: <font color='red'>" . $conn->error . ".</font>&nbsp&nbsp";
}

} else {
    echo "El código del producto no existe en la base de datos.&nbsp&nbsp";
}

}else{
echo "El código del producto debe ser un valor numérico.&nbsp&nbsp";
}

include("cerrar_con.php");
?>

<a href="<?=$_SERVER['HTTP_REFERER'] ?>"><input type="submit" class="btn btn-primary" value="Volver" /></a>

</font>

		
</body>

</html>