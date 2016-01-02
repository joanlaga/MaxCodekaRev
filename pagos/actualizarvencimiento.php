<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
</head>
<?php include ("../conectar.php"); 
include ("../funciones/fechas.php");
?>
<body>
<?php 
	$fechapago=$_REQUEST["fechapago"];
	$fechapago=explota($fechapago);
	$codfactura=$_REQUEST["codfactura"];
	$codproveedor=$_REQUEST["codproveedor"];
	$act_factura="UPDATE facturasp SET fechapago='$fechapago' WHERE codfactura='$codfactura' AND codproveedor='$codproveedor'";
	$rs_act=mysql_query($act_factura);
?>
</body>
</html>
