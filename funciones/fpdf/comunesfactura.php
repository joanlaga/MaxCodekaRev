<?php

require_once ('fpdf.php') ; 

//include("comunes.php");
require_once($_SERVER['DOCUMENT_ROOT'].'/git/maxcodekarev/configuraciones/globales.php');
//require_once(OBIB_CONF."conectar.php");

class PDF extends FPDF{
//Cabecera de pagina
function Header(){
    //Logo
    $this->Image(OBIB_IMG.'Factura v3.jpg',0,8,210,280);
//    $this->Image('../images/Factura v3.jpg',20,8,150,200);
    $this->Ln(5);	
}

//Pie de pgina
function Footer(){
    $this->SetFont('Arial','',10);
	$this->SetY(-21);
	$this->Cell(0,10,OBIB_LEY,0,0,'C');
	$this->SetY(-12);
    $this->Cell(0,10,'Pagina '.$this->PageNo().'',0,0,'C');	
}
}
?>
