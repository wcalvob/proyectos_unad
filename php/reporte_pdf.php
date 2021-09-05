<?php
	include("abrir_con.php");
    include("../libreria_fpdf/fpdf.php");
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(130,10, 'Reporte de Productos "Fox Electronics"',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
	
	$query = "SELECT codigo_producto,nombre_producto,marca_producto,precio_compra_producto,cantidad_compra_producto FROM tabla36";

	$conn = $conn->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(35,6,utf8_decode('Código'),1,0,'C',1);
	$pdf->Cell(50,6,'Nombre',1,0,'C',1);
	$pdf->Cell(40,6,'Marca',1,0,'C',1);
	$pdf->Cell(40,6,'Precio Compra',1,0,'C',1);
	$pdf->Cell(25,6,'Cantidad',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $conn->fetch_assoc())
	{
		$pdf->Cell(35,6,utf8_decode($row['codigo_producto']),1,0,'C');
		$pdf->Cell(50,6,$row['nombre_producto'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['marca_producto']),1,0,'C');
		$pdf->Cell(40,6,$row['precio_compra_producto'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['cantidad_compra_producto']),1,1,'C');
	}
	$pdf->Output();
	
	include("cerrar_con.php");
?>