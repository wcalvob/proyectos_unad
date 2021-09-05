<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head  class="header">

<link rel="icon" type="image/ico" href="../img/logo.png" />
<link rel="stylesheet" type="text/css" href="../estilos.css" />
<meta http-equiv="content-type" content="text/html;  charset=utf-8" />
<title>Administrador</title>
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

$sql = "CREATE TABLE tabla36 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
codigo_producto INT(30),
nombre_producto VARCHAR(50) NOT NULL,
marca_producto VARCHAR(50) NOT NULL,
precio_compra_producto INT(30),
cantidad_compra_producto INT(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "La tabla tabla36 se creó correctamente.&nbsp&nbsp";
} else {
    echo "Se ha presentado el siguiente error al crear la tabla: <font color='red'>" . $conn->error . ".</font>&nbsp&nbsp";
}

include("cerrar_con.php");
?>

<a href="<?=$_SERVER['HTTP_REFERER'] ?>"><input type="submit" class="btn btn-primary" value="Volver" /></a>

</font>

		
</body>

</html>