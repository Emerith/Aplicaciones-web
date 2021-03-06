<?php
require('Public/fpdf/fpdf.php');
class PDF extends FPDF
{

    function Header()
    {   date_default_timezone_set('America/Mexico_City');
        $this->SetFont('Arial','B',15);
        $this->Image('Public/fpdf/logo1.png', 0, 0, 211,35);
    }
    function Footer()
    {
        $this->SetY(-25);
        $this->SetFont('Arial','I',11);
        $this->Image('Public/fpdf/logo2.png', 0, 273, 211,25);
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Cell(190,10,'',0,0,'C');
$pdf->SetFont('Arial','BI',9);
$pdf->ln();
$pdf->Cell(190,10,'',0,0,'C');
$pdf->SetFont('Arial','BI',9);
$pdf->ln();
$pdf->ln();
$pdf->Cell(190,10,'Generado por: '.$_SESSION["email"].'',0,0,'L');
$pdf->SetFont('Arial','BI',9);
$pdf->ln();
$pdf->Cell(190,10,'Fecha:  '.date('d/m/Y').'',0,0,'L');
$pdf->SetFont('Arial','BI',9);
$pdf->ln();
$pdf->Cell(190,10,'Hora:  '.date('h:i:s').'',0,0,'L');
$pdf->SetFont('Arial','BI',9);
$pdf->Cell(190,10,'Lista de Eventos',0,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','BI',9);
$pdf->Cell(190,10,'Lista de Eventos',0,0,'C');
$pdf->SetFont('Arial','B',16);
$pdf->ln();
$pdf->SetFillColor(23,162,184);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(5);
$pdf->Cell(45,10,utf8_decode('Nombre'),1,0,'C','true');
$pdf->Cell(65,10,utf8_decode('Lugar'),1,0,'C', 'true');
$pdf->Cell(23,10,utf8_decode('Fecha inicio'),1,0,'C', 'true');
$pdf->Cell(26,10,utf8_decode('Fecha termino'),1,0,'C', 'true');
$pdf->Cell(20,10,utf8_decode('Horario'),1,0,'C', 'true');
$pdf->Cell(20,10,utf8_decode('Categoria'),1,0,'C', 'true');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',8);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(5);
    $pdf->Cell(45,10,utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(65,10,utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(23,10,utf8_decode($row[3]),1,0,'C');
    $pdf->Cell(26,10,utf8_decode($row[4]),1,0,'C');
    $pdf->Cell(20,10,utf8_decode($row[5]),1,0,'C');
    $pdf->Cell(20,10,utf8_decode($row[6]),1,0,'C');
}
$pdf->Output();
