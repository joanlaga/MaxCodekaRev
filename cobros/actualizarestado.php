<?php 
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>

<html>
<head>
</head>
<?php  include ("../conectar.php"); ?>
<body>
<?php  
	$estado=$_REQUEST["estado"];
	$codfactura=$_REQUEST["codfactura"];
	$act_factura="UPDATE facturas SET estado='$estado' WHERE codfactura='$codfactura'";
	$rs_act=mysql_query($act_factura);
?>
</body>
</html>
