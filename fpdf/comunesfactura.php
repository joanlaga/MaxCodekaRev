<?php

require_once ('fpdf.php') ; 

class PDF extends FPDF
{
//Cabecera de pagina
function Header()
{
    //Logo
    $this->Image('../images/Factura v3.jpg',20,8,150);
    $this->Ln(5);	
}

//Pie de pgina
function Footer()
{
    $this->SetFont('Arial','',6);
	$this->SetY(-21);
	$this->Cell(0,10,'CodeKa Mx version 16 Gestion Ventas entorno Web - 2010 ',0,0,'C');
	$this->SetY(-12);
    $this->Cell(0,10,'Pagina '.$this->PageNo().'',0,0,'C');	
}

}
?>
