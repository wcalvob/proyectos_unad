<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head  class="header">

<link rel="icon" type="image/ico" href="../img/logo.png" />
<link rel="stylesheet" type="text/css" href="../estilos.css" />
<meta http-equiv="content-type" content="text/html;  charset=utf-8" />
<title>Consultar Producto</title>
<meta http-equiv="content-language" content="es" />
<link rel="license" type="text/html" href="http://creativecommons.org/licenses/by-sa/4.0/" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

</br>


<?php
include("abrir_con.php");

$codigo_producto = $_POST['codigo_prod'];

if(is_numeric($codigo_producto)){
	
$sql = "SELECT codigo_producto,nombre_producto,marca_producto,precio_compra_producto,cantidad_compra_producto FROM tabla36 WHERE codigo_producto = $codigo_producto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
echo "<div class='formulario'><table style='text-align:center;width:100%'><tr style='font-weight:bold;background-color:#E3E4E4'>
<td style='border: 1px solid black; padding:5px'>Código</td>
<td style='border: 1px solid black; padding:5px'>Nombre</td>
<td style='border: 1px solid black; padding:5px'>Marca</td>
<td style='border: 1px solid black; padding:5px'>Precio de compra</td>
<td style='border: 1px solid black; padding:5px'>Cantidad comprada</td>
</tr>";

    while($row = $result->fetch_assoc()) {
		echo "<tr style='background-color:white'><td style='border: 1px solid black; padding:5px'>";
		echo $row["codigo_producto"];
		echo "</td>";
		echo "<td style='border: 1px solid black; padding:5px'>";
		echo $row["nombre_producto"];
		echo "</td>";
		echo "<td style='border: 1px solid black; padding:5px'>";
		echo $row["marca_producto"];
		echo "</td>";
		echo "<td style='border: 1px solid black; padding:5px'>";
		echo $row["precio_compra_producto"];
		echo "</td>";
		echo "<td style='border: 1px solid black; padding:5px'>";
		echo $row["cantidad_compra_producto"];
		echo "</td></tr>";
    }
echo "</table></br>";
echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'><input type='submit' class='btn btn-primary' value='Volver' /></a>";
echo "</div>";
} else {
    echo "&nbsp&nbsp&nbsp&nbsp El código del producto no existe en la base de datos.&nbsp&nbsp";
	echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'><input type='submit' class='btn btn-primary' value='Volver' /></a>";
}

}else{
echo "&nbsp&nbsp&nbsp&nbsp El código del producto debe ser un valor numérico.&nbsp&nbsp";
echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'><input type='submit' class='btn btn-primary' value='Volver' /></a>";
}

include("cerrar_con.php");
?>


		
</body>

</html>