<?php 
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 

include ("../configuraciones/conectar.php");

$codfactura=$_REQUEST["codfacturatmp"];
$numlinea=$_REQUEST["numlinea"];

$consulta = "DELETE FROM factulineatmp WHERE codfactura ='".$codfactura."' AND numlinea='".$numlinea."'";
$rs_consulta = mysql_query($consulta);
echo " <script type=\"text/javascript\"> parent.location.href='frame_lineas.php?codfacturatmp=".$codfactura."';</script>";
?>
<script type="text/javascript">parent.document.getElementById("codbarras").focus();</script>
