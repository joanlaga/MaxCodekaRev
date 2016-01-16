<?php
define('FPDF_FONTPATH','font/');
require_once('mysql_table.php');

include("comunes.php");
require_once(OBIB_CONF."conectar.php");
//require_once($_SERVER[DOCUMENT_ROOT]."/git/maxcodekarev/configuraciones/conectar.php");  

$pdf=new PDF();
$pdf->Open();
$pdf->AddPage();

//Nombre del Listado
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',16);
$pdf->SetY(40);
$pdf->SetX(0);
$pdf->MultiCell(290,6,"Listado de Vendedores",0,"C",0);

$pdf->Ln();    
	
//Restauracin de colores y fuentes

    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial','B',7);


//Buscamos y listamos las familias

$nombrevendedor=$_REQUEST["nombrevendedor"];
$codvendedor=$_REQUEST["codvendedor"];

$where2='';//joanlaga x bug
$where="1=1";
if ($codvendedor <> "") { $where.=" AND codvendedor='$codvendedor'"; }
if ($nombrevendedor <> "") { $where.=" AND nombrevendedor like '%".$nombrevendedor."%'"; }
$where2.=" ORDER BY nombrevendedor ASC";

//Ttulos de las columnas
$header=array('Cod. Vendedor','Nombre Vendedor');

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
$sel_resultado="SELECT * FROM vendedores WHERE borrado=0 AND ".$where.$where2;
$res_resultado=mysql_query($sel_resultado);
$contador=0;
while ($contador < mysql_num_rows($res_resultado)) {
	$pdf->SetX(60);
	$pdf->Cell($w[0],5,mysql_result($res_resultado,$contador,"codvendedor"),'LRTB',0,'C');
	$pdf->Cell($w[1],5,mysql_result($res_resultado,$contador,"nombrevendedor"),'LRTB',0,'C');
	$pdf->Ln();
	$contador++;
};

$pdf->Output($name=("Listado de Vendedores.pdf"),'D');			

?> 
