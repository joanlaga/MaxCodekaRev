<?php
include ("../configuraciones/conectar.php"); 

$codvendedor=$_REQUEST["codvendedor"];

        if(!isset($_REQUEST["cadena_busqueda"])){ 
           $cadena_busqueda = "" ; 
        } else { 
              $cadena_busqueda = $_REQUEST["cadena_busqueda"]; 
        }
//$cadena_busqueda=$_REQUEST["cadena_busqueda"];

$query="SELECT * FROM vendedores WHERE codvendedor='$codvendedor'";
$rs_query=mysql_query($query);

?>

<html>
	<head>
		<title>CodeKa Mx , Ver Vendedores</title>
		<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">
		
		var cursor;
		if (document.all) {
		// Está utilizando EXPLORER
		cursor='hand';
		} else {
		// Está utilizando MOZILLA/NETSCAPE
		cursor='pointer';
		}
		
		function aceptar() {
			location.href="index.php?cadena_busqueda=<?php echo $cadena_busqueda?>";
		}
		
		</script>
	</head>
	<body>
		<div id="pagina">
			<div id="zonaContenido">
				<div align="center">
				<div id="tituloForm" class="header">VER Vendedores </div>
				<div id="frmBusqueda">
					<table class="fuente8" width="98%" cellspacing=0 cellpadding=3 border=0>
						<tr>
							<td width="15%">C&oacute;digo</td>
							<td width="85%" colspan="2"><?php echo $codvendedor?></td>
					    </tr>
						<tr>
							<td width="15%">Nombre Vendedor </td>
						    <td width="85%" colspan="2"><?php echo mysql_result($rs_query,0,"nombrevendedor")?></td>
					    </tr>						
					</table>
			  </div>
				<div id="botonBusqueda">
					<img src="../images/botonaceptar.jpg" width="85" height="22" onClick="aceptar()" border="1" onMouseOver="style.cursor=cursor">
			  </div>
			 </div>
		  </div>
	</div>
	</body>
</html>
