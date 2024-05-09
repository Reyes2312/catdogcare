<?php
require('pdf/fpdf.php');

class PDF extends FPDF 
{
    // Cabecera de pagina
    function Header()
 {


     //Arial bold 15
$this->SetFont('Arial', 'B',16);
// Movernos a la derecha 
$this->Cell(60);
// Titulo
$this->Cell(70, 10, '¡Cita agendada!', 0,0, 'C');
// Salto de linea
$this->Ln(20);

$this->Cell(80,10, 'Fecha:', 1,0, 'C',0);

$this->Cell(80,10, 'Hora:', 1,0, 'C',0);
$this->Cell(80,10, 'Paciente:', 1,0, 'C',0);
$this->Cell(80,10, 'Médico:', 1,0, 'C',0);
$this->Cell(50, 10, 'Motivo de la Visita:', 1,1, 'C',0);


}
    // Pie de pagina 
function Footer()
{

// Posicion: a 1,5 cm al final 
$this->SetY(-15);
// Arial italic 8
$this-SetFont('Arial', 'I',8);
// Numero de pagina 
$this->Cell(0,10, utf8_decode('Pagina') .$this->PageNo() .'/{nb}',0,0, 'C');
}
}

include ('conexion.php');
$conexion = connection();
$consulta = "SELECT * FROM citas";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new pdf();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B',10);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(80,10,$row['Fecha'],1,0,'C',0);
    $pdf->Cell(50,10,$row['Hora'],1,0,'C',0);
    $pdf->Cell(50,10,$row['Paciente'],1,0,'C',0);
    $pdf->Cell(50,10,$row['Médico'],1,0,'C',0);
    $pdf->Cell(50,10,$row['Motivo de la Visita'],1,0,'C',0);

}

$pdf-Output();

?>