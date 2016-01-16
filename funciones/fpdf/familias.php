<?php

define('FPDF_FONTPATH','font/');

/*
Notice: Undefined index: codfamilia in /var/www/html/maxcodeka/fpdf/familias.php on line 34 
Notice: Undefined index: nombre in /var/www/html/maxcodeka/fpdf/familias.php on line 35 FPDF 
error: Some data has already been output, can't send PDF file
*/

//print_r($_REQUEST);
//print_r($_REQUEST);
require_once ('fpdf.php') ; 

include("comunes.php");
require_once(OBIB_CONF."conectar.php");

$pdf=new PDF();
$pdf->Open();
$pdf->AddPage();
// Cabecera

$pdf->Header('../images/logo.jpg',10,8,33,33);

//Nombre del Listado
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',16);
$pdf->SetY(40);
$pdf->SetX(0);
$pdf->MultiCell(290,6,"Listado de Familias",0,"C",0);

$pdf->Ln();    
	
//Restauracin de colores y fuentes

    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial','B',7);


//Buscamos y listamos las familias

$codfamilia=$_REQUEST["codfamilia"];
$nombre=$_REQUEST["nombre"];

$where="1=1";
if ($codfamilia <> "") { $where.=" AND codfamilia='$codfamilia'"; }
if ($nombre <> "") { $where.=" AND nombre like '%".$nombre."%'"; }


//Ttulos de las columnas
$header=array('Cod. Familia','Nombre');

//Colores, ancho de lnea y fuente en negrita
$pdf->SetFillColor(200,200,200);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(.2);
$pdf->SetFont('Arial','B',8);
	
//Cabecera
$pdf->SetX(60);
$w=array(20,60);
for($i=0;$i<count($header);$i++)
	$pdf->Cell($w[$i],7,$header[$i],1,0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$sel_resultado="SELECT * FROM familias WHERE borrado=0 AND ".$where;
$res_resultado=mysql_query($sel_resultado);
$contador=0;
while ($contador < mysql_num_rows($res_resultado)) {
	$pdf->SetX(60);
	$pdf->Cell($w[0],5,mysql_result($res_resultado,$contador,"codfamilia"),'LRTB',0,'C');
	$pdf->Cell($w[1],5,mysql_result($res_resultado,$contador,"nombre"),'LRTB',0,'C');
	$pdf->Ln();
	$contador++;
};
			
$pdf->Output();
?> 
