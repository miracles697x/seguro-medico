<?php
	require '../fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../img/ojo.png', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->ln(5);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Especialidades',0,0,'C'); // no tiene controno
			$this->Ln(20);//salto de linea
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>