<?php include ("../configuraciones/conectar.php"); 

$codprovincia=$_REQUEST["codprovincia"];

$query="SELECT * FROM provincias WHERE codprovincia='$codprovincia'";
$rs_query=mysql_query($query);

?>
<html>
	<head>
		<title>Principal</title>
		<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="../funciones/validar.js"></script>
		<script type="text/javascript">
		
		var cursor;
		if (document.all) {
		// Está utilizando EXPLORER
		cursor='hand';
		} else {
		// Está utilizando MOZILLA/NETSCAPE
		cursor='pointer';
		}
		
		function cancelar() {
			location.href="index.php?cadena_busqueda=<?php echo $cadena_busqueda?>";
		}
		
		function limpiar() {
			document.getElementById("formulario").reset();
		}
		
		</script>
	</head>
	<body>
		<div id="pagina">
			<div id="zonaContenido">
				<div align="center">
				<div id="tituloForm" class="header">MODIFICAR PROVINCIA </div>
				<div id="frmBusqueda">
				<form id="formulario" name="formulario" method="post" action="guardar_provincia.php">
					<table class="fuente8" width="98%" cellspacing=0 cellpadding=3 border=0>
						<tr>
							<td>C&oacute;digo</td>
							<td><?php echo $codprovincia?></td>
					
         	    <td width="42%" rowspan="2" align="left" valign="top"><ul id="lista-errores"></ul></td>
			
						</tr>
						<tr>
							<td width="15%">Nombre</td>
						    <td width="43%"><input NAME="Anombreprovincia" type="text" class="cajaGrande" id="nombreprovincia" size="45" maxlength="45" value="<?php echo mysql_result($rs_query,0,"nombreprovincia")?>"></td>							
							
				        </tr>
					</table>
			  </div>
				<div id="botonBusqueda">
					<img src="../images/botonaceptar.jpg" width="85" height="22" onClick="validar(formulario,true)" border="1" onMouseOver="style.cursor=cursor">
					<img src="../images/botonlimpiar.jpg" width="69" height="22" onClick="limpiar()" border="1" onMouseOver="style.cursor=cursor">
					<img src="../images/botoncancelar.jpg" width="85" height="22" onClick="cancelar()" border="1" onMouseOver="style.cursor=cursor">
					<input id="accion" name="accion" value="modificar" type="hidden">
					<input id="id" name="Zid" value="<?php echo $codprovincia?>" type="hidden">
			  </div>
			  </form>
			 </div>
		  </div>
		</div>
	</body>
</html>
