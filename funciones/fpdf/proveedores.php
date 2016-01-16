<?php
require_once ('fpdf.php') ;
define('FPDF_FONTPATH','font/');
include("comunes.php");
require_once(OBIB_CONF."conectar.php");

$pdf=new PDF();
$pdf->Open();
$pdf->AddPage();
// Cabecera
//	$pdf->Header('./images/logo.jpg',10,8,33,33);
//	$this->Image(OBIB_IMG.'logo.jpg',5,3,25,15);
//	$pdf->Header();

//Nombre del Listado
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',16);
	$pdf->SetY(40);
	$pdf->SetX(0);
	$pdf->MultiCell(290,6,"Listado de Proveedores",0,"C",0);
	$pdf->Ln();    

//Restauracin de colores y fuentes
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial','B',7);

//Buscamos y listamos las familias
$codproveedor=$_REQUEST["codproveedor"];
$nombre=$_REQUEST["nombre"];
$nif=$_REQUEST["nif"];
$codprovincia=$_REQUEST["provincia"];
$localidad=$_REQUEST["localidad"];
$telefono=$_REQUEST["telefono"];

$where="1=1";
	if ($codproveedor <> "") { $where.=" AND codproveedor='$codproveedor'"; }
	if ($nombre <> "") { $where.=" AND nombre like '%".$nombre."%'"; }
	if ($nif <> "") { $where.=" AND nif like '%".$nif."%'"; }
	if ($codprovincia > "0") { $where.=" AND codprovincia='$codprovincia'"; }
	if ($localidad <> "") { $where.=" AND localidad like '%".$localidad."%'"; }
	if ($telefono <> "") { $where.=" AND telefono like '%".$telefono."%'"; }
//Ttulos de las columnas
	$header=array('Nombre','NIF','Direccion','Localidad','Telefono');
//Colores, ancho de lnea y fuente en negrita
	$pdf->SetFillColor(200,200,200);
	$pdf->SetTextColor(0);
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetLineWidth(.2);
	$pdf->SetFont('Arial','B',8);
//Cabecera
	$w=array(50,20,60,40,20);
	for($i=0;$i<count($header);$i++)
		$pdf->Cell($w[$i],7,$header[$i],1,0,'C',1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',8);
	$sel_resultado="SELECT * FROM proveedores WHERE borrado=0 AND ".$where;
	$res_resultado=mysql_query($sel_resultado);
	$contador=0;
while ($contador < mysql_num_rows($res_resultado)) {
	$pdf->Cell($w[0],5,mysql_result($res_resultado,$contador,"nombre"),'LRTB',0,'L');
	$pdf->Cell($w[1],5,mysql_result($res_resultado,$contador,"nif"),'LRTB',0,'C');
	$pdf->Cell($w[2],5,mysql_result($res_resultado,$contador,"direccion"),'LRTB',0,'L');
	$pdf->Cell($w[3],5,mysql_result($res_resultado,$contador,"localidad"),'LRTB',0,'L');
	$pdf->Cell($w[4],5,mysql_result($res_resultado,$contador,"telefono"),'LRTB',0,'C');
	$pdf->Ln();
	$contador++;
};
	$pdf->Output($name=("Listado Proveedores.pdf"),'D');