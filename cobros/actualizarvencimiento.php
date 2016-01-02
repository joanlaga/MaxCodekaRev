<?php 
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
</head>
<?php 
 include ("../conectar.php"); 
 include ("../funciones/fechas.php");
?>
<body>
<?php 
	$fechavencimiento=$_REQUEST["fechavencimiento"];
	$fechavencimiento=explota($fechavencimiento);
	$codfactura=$_REQUEST["codfactura"];
	$act_factura="UPDATE facturas SET fechavencimiento='$fechavencimiento' WHERE codfactura='$codfactura'";
	$rs_act=mysql_query($act_factura);
?>
</body>
</html>
