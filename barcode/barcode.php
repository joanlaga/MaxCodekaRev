<?php
/*
*/
	require("barcode.inc.php");	

$_REQUEST["encode"] = "EAN-13";
$_REQUEST["bdata"] = $codigobarras;
$_REQUEST["height"] = "50";
$_REQUEST["scale"] = "2";
$_REQUEST["color"] = "23333366";
$_REQUEST["bgcolor"] = "23FFFFEC";
$_REQUEST["type"] = "png";
$_REQUEST["file"] = $codigobarras;
/*
echo "<pre>";	
print_r($_REQUEST);
print_r($_POST);
print_r($_GET);
echo "</pre>";
*/

$encode = "EAN-13";
$bdata =  $codigobarras;
$height = "50";
$scale = "2";
$color = "23333366";
$bgcolor = "23FFFFEC";
$type =  "png";
$file = $codigobarras;

//	$encode=$_REQUEST['encode'];

	$bar= new BARCODE();
	
	if($bar==false)
		die($bar->error());
			
	// OR $bar= new BARCODE("I2O5");

	$barnumber=$_REQUEST['bdata'];
	//$barnumber="200780";
	//$barnumber="801221905";
	//$barnumber="A40146B";
	//$barnumber="Code 128";
	//$barnumber="TEST8052";
	//$barnumber="TEST93";
	
	$bar->setSymblogy($encode);
	$bar->setHeight($_REQUEST['height']);
	$bar->SetFont('Arial','B',6);	
	$bar->setScale($_REQUEST['scale']);
	$bar->setHexColor($_REQUEST['color'],$_REQUEST['bgcolor']);

	//$bar->setSymblogy("UPC-E");
	//$bar->setHeight(50);
	//$bar->setFont("arial");
	//$bar->setScale(2);
	//$bar->setHexColor("#000000","#FFFFFF");
	//OR
	//$bar->setColor(255,255,255)   RGB Color
	//$bar->setBGColor(0,0,0)   RGB Color

	$return = $bar->genBarCode($barnumber,$_REQUEST['type'],$_REQUEST['file']);
	if($return==false)
		$bar->error(true);
?>
