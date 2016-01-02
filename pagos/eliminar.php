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
	$idmov=$_REQUEST["idmov"];
	$codfactura=$_REQUEST["codfactura"];
	$codproveedor=$_REQUEST["codproveedor"];
	$fechapago=$_REQUEST["fechapago"];
	$importe=$_REQUEST["importe"];
	$importe="-".$importe;
	$fecha=explota($fechapago);
	
	$act_factura="DELETE FROM pagos WHERE idmov='$idmov' AND codfactura='$codfactura' AND codproveedor='$codproveedor'";
	$rs_act=mysql_query($act_factura);
	
	$sel_libro="INSERT INTO librodiario (id,fecha,tipodocumento,coddocumento,codcomercial,codformapago,numpago,total) VALUES 
	('','$fecha','1','$codfactura','','','','$importe')";
	$rs_libro=mysql_query($sel_libro);
?>
</body>
</html>
