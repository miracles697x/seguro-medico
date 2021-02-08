
 <?php
	include 'plantilla.php';
	require '../admin/config.php';
	require '../functions.php';


$conexion = conexion($bd_config);

	
	$datos1 = listaEspecialidad($conexion);


	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->ln(5);
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetX(27);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(80,6,'DESCRIPCION',1,0,'C',1);
	$pdf->Cell(50,6,'Estado',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	foreach ($datos1 as $dato): 
	{
		$pdf->SetX(27);
		$pdf->Cell(20,6,$dato['codigo'],1,0,'C');
		$pdf->Cell(80,6,utf8_decode($dato['descripcion']),1,0,'C');

		if($dato['estado']=='1'){
			$pdf->Cell(50,6,"Activa",1,1,'C');
		}else{
				$pdf->Cell(50,6,"Inactiva",1,1,'C');
		
		}
	}
	 endforeach;
	$pdf->Output('I','Especialidades.pdf');
?>