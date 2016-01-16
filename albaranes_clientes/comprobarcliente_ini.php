<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
</head>
<script type="text/javascript">

function pon_prefijo(nombre) {
	parent.document.form_busqueda.nombre.value=nombre;
}

function limpiar() {
	parent.document.form_busqueda.nombre.value="";
	parent.document.form_busqueda.codcliente.value="";
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
		pon_prefijo("<?php echo mysql_result($rs_tabla,0,nombre) ?>");
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
