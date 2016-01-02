<?php

require_once ('fpdf.php') ; 

class PDF extends FPDF
{
//Cabecera de pagina
function Header()
{
    //Logo
    $this->Image('../images/logo.jpg',5,3,25,15);
    $this->Ln(5);	
}

//Pie de pgina
function Footer()
{
    $this->SetFont('Arial','',6);
	$this->SetY(-21);
	$this->Cell(0,10,'MaxCodeKaRev - Sistema de Control para Gestion de Ventas en entorno Web Ver 1.0.0-Beta - 2014 ',0,0,'C');
	$this->SetY(-12);
    $this->Cell(0,10,'Pagina '.$this->PageNo().'',0,0,'C');	
}

}
?>
