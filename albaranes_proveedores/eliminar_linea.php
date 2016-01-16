<?php 
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 

include ("../configuraciones/conectar.php");

$codalbaran=$_REQUEST["codalbarantmp"];
$numlinea=$_REQUEST["numlinea"];

$consulta = "DELETE FROM albalineaptmp WHERE codalbaran ='".$codalbaran."' AND numlinea='".$numlinea."'";
$rs_consulta = mysql_query($consulta);
echo "<script type=\"text/javascript\"> parent.location.href='frame_lineas.php?codalbarantmp=".$codalbaran."';</script>";

?>
