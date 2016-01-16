<?php
require_once ('fpdf.php') ; 
//echo $_SERVER['DOCUMENT_ROOT'];
require_once($_SERVER['DOCUMENT_ROOT'].'/git/maxcodekarev/configuraciones/globales.php');

//require_once(OBIB_CONF."conectar.php");

class PDF extends FPDF{
//Cabecera de pagina
function Header(){
    //Logo
	$this->Image(OBIB_IMG.'logo.jpg',5,3,25,15);
	$this->Ln(5);
}

//Pie de pgina
function Footer(){
    $this->SetFont('Arial','',6);
	$this->SetY(-21);
	$this->Cell(0,10,OBIB_LEY,0,0,'C');
	$this->SetY(-12);
    $this->Cell(0,10,'Pagina '.$this->PageNo().'',0,0,'C');	
}
}