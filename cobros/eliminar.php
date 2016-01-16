<?php 
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
</head>
<?php  include ("../configuraciones/conectar.php"); 
include ("../funciones/fechas.php");
?>
<body>
<?php 
	$idmov=$_REQUEST["idmov"];
	$codfactura=$_REQUEST["codfactura"];
	$fechacobro=$_REQUEST["fechacobro"];
	$importe=$_REQUEST["importe"];
	$importe="-".$importe;
	$fecha=explota($fechacobro);
	$act_factura="DELETE FROM cobros WHERE idmov='$idmov' AND codfactura='$codfactura'";
	$rs_act=mysql_query($act_factura);
	
	//1 compra
	//2 venta
	
	$sel_libro="INSERT INTO librodiario (id,fecha,tipodocumento,coddocumento,codcomercial,codformapago,numpago,total) VALUES 
	('','$fecha','2','$codfactura','','','','$importe')";
	$rs_libro=mysql_query($sel_libro);
?>
</body>
</html>
