<?php 
include ("../configuraciones/conectar.php");
include ("../funciones/fechas.php");

$hoy=date("d/m/Y");
/* echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
*/
//@$cadena_busqueda=$_REQUEST["cadena_busqueda"];
if (!isset($_REQUEST["cadena_busqueda"])) { $cadena_busqueda=""; } else { $cadena_busqueda=str_replace("",",",$_REQUEST["cadena_busqueda"]); }

if (!isset($cadena_busqueda)) { $cadena_busqueda=""; } else { @$cadena_busqueda=str_replace("",",",$cadena_busqueda); }

if ($_REQUEST["accion"]=="") { $accion=$_REQUEST["accion"]; } else { $accion=$_REQUEST["accion"]; }

if ($accion=="ver") {
	$codfactura=$_REQUEST["codfactura"];
}

if ($accion=="insertar") {
	$importe=$_REQUEST["Rimporte"];
	$codcliente=$_REQUEST["codcliente"];
	$codfactura=$_REQUEST["codfactura"];
	$formapago=$_REQUEST["AcboFP"];
	$numdocumento=$_REQUEST["anumdocumento"];
	$observaciones=$_REQUEST["observaciones"];
	//$estado=$_REQUEST["cboEstados"];
	$fechacobro=$_REQUEST["fechacobro"];
	if ($fechacobro<>"") { $fechacobro=explota($fechacobro); }
	$sel_insertar="INSERT INTO cobros 		(id,codfactura,codcliente,importe,codformapago,numdocumento,fechacobro,observaciones) VALUES 
('','$codfactura','$codcliente','$importe','$formapago','$numdocumento','$fechacobro','$observaciones')";
	$rs_insertar=mysql_query($sel_insertar);
	
	//1 compra
	//2 venta
	
	$sel_libro="INSERT INTO librodiario (id,fecha,tipodocumento,coddocumento,codcomercial,codformapago,numpago,total) VALUES 
	('','$fechacobro','2','$codfactura','$codcliente','$formapago','$numdocumento','$importe')";
	$rs_libro=mysql_query($sel_libro);
	
	?>
	<script type="text/javascript">
	parent.document.getElementById("observaciones").value="";
	parent.document.getElementById("Rimporte").value="";
	parent.document.getElementById("anumdocumento").value="";
	parent.document.getElementById("AcboFP").value="";
	parent.document.getElementById("fechacobro").value="<?php  echo $hoy?>";
	var importe=<?php  echo $importe?>;
	var total=parent.document.getElementById("pendiente").value - parseFloat(importe);
	var original=parseFloat(total);
	var result=Math.round(original*100)/100 ;
	parent.document.getElementById("pendiente").value=result;
	</script>
	<?php 
}

$query_busqueda="SELECT count(*) as filas FROM cobros,clientes WHERE cobros.codcliente=clientes.codcliente AND cobros.codfactura='$codfactura' order BY id DESC";
$rs_busqueda=mysql_query($query_busqueda);
$filas=mysql_result($rs_busqueda,0,"filas");

?>
<html>
	<head>
		<title>Clientes</title>
		<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">

		function abreVentana(observaciones){
			miPopup = window.open("ver_observaciones.php?observaciones="+observaciones,"miwin","width=380,height=240,scrollbars=yes");
			miPopup.focus();
		}
		
		function eliminar(codfactura,idmov,fechacobro,importe){			
			miPopup = window.open("eliminar.php?codfactura="+codfactura+"&idmov="+idmov+"&fechacobro="+fechacobro+"&importe="+importe,"frame_datos","width=380,height=240,scrollbars=yes");
		}
		
		function ver_cobros(codfactura) {
			parent.location.href="ver_cobros.php?codfactura=" + codfactura + "&cadena_busqueda=<?php  echo $cadena_busqueda?>";
		}
		
		</script>
	</head>
	<body>	
			<div id="zonaContenidoPP2">
			<div align="center">
			<table class="fuente8" width="100%" cellspacing=0 cellpadding=3 border=0 ID="Table1">
			<form name="form1" id="form1">		
				<?php 	if ($filas > 0) { ?>
						<?php  $sel_resultado="SELECT * FROM facturas,cobros,clientes,formapago WHERE cobros.codfactura='$codfactura' AND cobros.codfactura=facturas.codfactura AND cobros.codcliente=clientes.codcliente AND cobros.codformapago=formapago.codformapago ORDER BY cobros.id DESC";
						   $res_resultado=mysql_query($sel_resultado);
						   $contador=0;				   
						   while ($contador < mysql_num_rows($res_resultado)) { 
								if ($contador % 2) { $fondolinea="itemParTabla"; } else { $fondolinea="itemImparTabla"; }?>
						<tr class="<?php  echo $fondolinea?>">
							<td class="aCentro" width="10%"><?php  echo $contador+1;?></td>
							<td width="12%"><div align="center"><?php  echo implota(mysql_result($res_resultado,$contador,"fechacobro"))?></div></td>
							<td width="12%"><div align="center"><?php  echo number_format(mysql_result($res_resultado,$contador,"importe"),2,".",",")?></div></td>							
							<td width="20%"><div align="center"><?php  echo mysql_result($res_resultado,$contador,"nombrefp")?></div></td>
							<td class="aDerecha" width="20%"><div align="center"><?php  echo mysql_result($res_resultado,$contador,"numdocumento")?></div></td>
							<td class="aDerecha" width="15%"><div align="center"><?php  echo implota(mysql_result($res_resultado,$contador,"fechavencimiento"))?></div></td>
							<td width="5%"><div align="center"><a href="#"><img src="../images/observaciones.png" width="16" height="16" border="0" onClick="abreVentana('<?php  echo mysql_result($res_resultado,$contador,"observaciones")?>')" title="Ver Observaciones"></a></div></td>
							<td width="5%"><div align="center"><a href="#"><img src="../images/eliminar2.jpg" width="1" height="1" border="0" onClick="eliminar('<?php  echo mysql_result($res_resultado,$contador,"codfactura")?>',<?php  echo mysql_result($res_resultado,$contador,"id")?>,<?php  echo mysql_result($res_resultado,$contador,"fechacobro")?>,<?php  echo mysql_result($res_resultado,$contador,"importe")?>)" title="Eliminar"></a></div></td>
						</tr>
						<?php  $contador++;
							}
						?>			
					</table>
					<?php  } else { ?>
					<table class="fuente8" width="106%" cellspacing=0 cellpadding=3 border=0>
						<tr>
							<td width="106%" class="mensaje"><?php  echo "Todav&iacute;a no se ha producido ning&uacute;n cobro de esta factura.";?></td>
					    </tr>
					</table>					
					<?php  } ?>	
					</form>				
				</div>
				<iframe id="frame_datos" name="frame_datos" width="0" height="0" frameborder="0">
					<ilayer width="0" height="0" id="frame_datos" name="frame_datos"></ilayer>
					</iframe>
				</div>
		  </div>			
	</body>
</html>
