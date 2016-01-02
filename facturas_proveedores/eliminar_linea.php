<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 

include ("../conectar.php");

$codfactura=$_REQUEST["codfacturatmp"];
$numlinea=$_REQUEST["numlinea"];

$consulta = "DELETE FROM factulineaptmp WHERE codfactura ='".$codfactura."' AND numlinea='".$numlinea."'";
$rs_consulta = mysql_query($consulta);
echo "<script type=\"text/javascript\">parent.location.href='frame_lineas.php?codfacturatmp=".$codfactura."';</script>";

?>
