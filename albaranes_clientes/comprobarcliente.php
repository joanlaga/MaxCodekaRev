<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
</head>
<script type="text/javascript">

function pon_prefijo(nombre,nif) {
	parent.document.formulario.nombre.value=nombre;
	parent.document.formulario.nif.value=nif;
}

function limpiar() {
	parent.document.formulario.nombre.value="";
	parent.document.formulario.nif.value="";
	parent.document.formulario.codcliente.value="";
}

</script>
<?php include ("../configuraciones/conectar.php"); ?>
<body>
<?php 
	$codcliente=$_REQUEST["codcliente"];
	$consulta="SELECT * FROM clientes WHERE codcliente='$codcliente' AND borrado=0";
	$rs_tabla = mysql_query($consulta);
	if (mysql_num_rows($rs_tabla)>0) {
		?>
		<script type="text/javascript">
		pon_prefijo("<?php echo mysql_result($rs_tabla,0,nombre) ?>","<?php echo mysql_result($rs_tabla,0,nif) ?>");
		</script>
		<?php 
	} else { ?>
	<script type="text/javascript">
	alert ("No existe ningun cliente con ese codigo");
	limpiar();
	</script>
	<?php }
?>
</div>
</body>
</html>
