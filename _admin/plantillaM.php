<?php
	require '../fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../img/ojo.png', 5, 5, 30 );
			$this->SetFont('Arial','B',16);
			$this->Cell(30);
			$this->Cell(120,10, utf8_decode('Perfíl Médico'),0,0,'C'); // no tiene controno
			$this->Ln(20);//salto de linea
		}
		
		function Footer()
		{
		
		}		
	}
?>