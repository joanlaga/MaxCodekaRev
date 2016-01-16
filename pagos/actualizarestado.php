<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
</head>
<?php include ("../configuraciones/conectar.php"); ?>
<body>
<?php 
	$estado=$_REQUEST["estado"];
	$codfactura=$_REQUEST["codfactura"];
	$codproveedor=$_REQUEST["codproveedor"];
	$act_factura="UPDATE facturasp SET estado='$estado' WHERE codfactura='$codfactura' AND codproveedor='$codproveedor'";
	$rs_act=mysql_query($act_factura);
?>
</body>
</html>
