<?php include ("../configuraciones/conectar.php"); ?>
<html>
	<head>
		<title>Principal</title>
		<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="../funciones/validar.js"></script>
		<script type="text/javascript" src="../funciones/livevalidation_standalone.js"></script>		
		<script type="text/javascript">
		
		function cancelar() {
			location.href="index.php";
		}
		
		var cursor;
		if (document.all) {
		// Está utilizando EXPLORER
		cursor='hand';
		} else {
		// Está utilizando MOZILLA/NETSCAPE
		cursor='pointer';
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
				<div id="tituloForm" class="header">INSERTAR PROVINCIA </div>
				<div id="frmBusqueda">
				<form id="formulario" name="formulario" method="post" action="guardar_provincia.php">
					<table class="fuente8" width="98%" cellspacing=0 cellpadding=3 border=0>
						<tr>
							<td width="14%">Nombre</td>
						    <td width="36%"><input NAME="Anombreprovincia" type="text" class="cajaGrande" id="nombreprovincia" size="45" maxlength="45"></td>
			            <td width="50%"><ul id="lista-errores"></ul></td>
						
<!--							<script type="text/javascript">
                                       var nombreprovincia = new LiveValidation('nombreprovincia');
                                       nombreprovincia.add( Validate.Format, { pattern: /^[\ \-_\w\,]+$/i } );
                                       nombreprovincia.add( Validate.Presence, {failureMessage: "No debe dejar en blanco!" } );	
										   </script>	
-->								
						</tr>						
					</table>
			  </div>
				<div id="botonBusqueda">
					<img src="../images/botonaceptar.jpg" width="85" height="22" onClick="validar(formulario,true)" border="1" onMouseOver="style.cursor=cursor">
					<img src="../images/botonlimpiar.jpg" width="69" height="22" onClick="limpiar()" border="1" onMouseOver="style.cursor=cursor">
					<img src="../images/botoncancelar.jpg" width="85" height="22" onClick="cancelar()" border="1" onMouseOver="style.cursor=cursor">
					<input id="accion" name="accion" value="alta" type="hidden">
					<input id="id" name="id" value="" type="hidden">
			  </div>
			  </form>
			 </div>
		  </div>
		</div>
	</body>
</html>
