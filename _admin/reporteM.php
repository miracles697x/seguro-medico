 <?php
	include 'plantillaM.php';
	require '../admin/config.php';
	require '../functions.php';


$conexion = conexion($bd_config);

	$id=$_GET['id'];
	$informacion =datoMedico($id,$conexion);
$especialidad = espeM($id,$conexion);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	foreach ($informacion as $dato): 
	{
//inserto la cabecera poniendo una imagen dentro de una celda
$pdf->Cell(200,85,$pdf->Image('../img/'.$dato['foto'],140,30,50),0,0,'R');	

$pdf->SetDrawColor(75,19,244);
$pdf->SetLineWidth(0.4);
$pdf->Line(40,20,190,20);
$pdf->Ln(4);

$pdf->Cell(10);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(35,10, utf8_decode("Matrícula : "),0,0,'L'); // no tiene controno
$pdf->SetFont('Times','',14);
$pdf->Cell(15,10,utf8_decode($dato['id']),0,1,'L'); // no tiene controno


$pdf->Cell(10);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(35,10, "Nombre : ",0,0,'L'); // no tiene controno
$pdf->SetFont('Times','',14);
$pdf->Cell(15,10,utf8_decode($dato['nombres']),0,0,'L'); // no tiene controno


$pdf->Ln(10);
$pdf->Cell(10);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(35,10, "Apellidos : ",0,0,'L'); // no tiene controno
$pdf->SetFont('Times','',14);
$pdf->Cell(15,10,utf8_decode($dato['apellidos']),0,0,'L'); // no tiene controno

$pdf->Ln(10);
$pdf->Cell(10);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(35,10, "Fecha Nac. : ",0,0,'L'); // no tiene controno
$pdf->SetFont('Times','',14);
$pdf->Cell(20,10,$dato['fecha_nac'],0,0,'L'); // no tiene controno

$pdf->Ln(10);
$pdf->Cell(10);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(35,10, "Celular : ",0,0,'L'); // no tiene controno
$pdf->SetFont('Times','',14);
$pdf->Cell(20,10,$dato['telefono'],0,0,'L'); // no tiene controno


}
	 endforeach;

$pdf->Ln(10);
$pdf->Cell(10);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(35,10, "Especialidad : ",0,1,'L'); // no tiene controno

foreach ($especialidad as $datos): 
$pdf->Ln(5);
$pdf->Cell(10);
$pdf->SetFont('Times','',14);
$pdf->Cell(20,2,$datos['descripcion'],0,1,'L'); // no tiene controno


endforeach;
	$pdf->Output('I','PerfilMedico.pdf');
?>