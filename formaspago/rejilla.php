<?php
include ("../configuraciones/conectar.php");

$codformapago=$_REQUEST["codformapago"];
$nombrefp=$_REQUEST["nombrefp"];
$cadena_busqueda=$_REQUEST["cadena_busqueda"];

$where="1=1";
if ($codformapago <> "") { $where.=" AND codformapago='$codformapago'"; }
if ($nombrefp <> "") { $where.=" AND nombrefp like '%".$nombrefp."%'"; }

$where.=" ORDER BY nombrefp ASC";
$query_busqueda="SELECT count(*) as filas FROM formapago WHERE borrado=0 AND ".$where;
$rs_busqueda=mysql_query($query_busqueda);
$filas=mysql_result($rs_busqueda,0,"filas");

?>
<html>
	<head>
		<title>Forma de pago</title>
		<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">
		
		function ver_fp(codformapago) {
			parent.location.href="ver_fp.php?codformapago=" + codformapago + "&cadena_busqueda=<?php echo $cadena_busqueda?>";
		}
		
		function modificar_fp(codformapago) {
			parent.location.href="modificar_fp.php?codformapago=" + codformapago + "&cadena_busqueda=<?php echo $cadena_busqueda?>";
		}
		
		function eliminar_fp(codformapago) {
			parent.location.href="eliminar_fp.php?codformapago=" + codformapago + "&cadena_busqueda=<?php echo $cadena_busqueda?>";
		}

		function inicio() {
			var numfilas=document.getElementById("numfilas").value;
			var indi=parent.document.getElementById("iniciopagina").value;
			var contador=1;
			var indice=0;
			if (indi>numfilas) { 
				indi=1; 
			}
			parent.document.form_busqueda.filas.value=numfilas;
			parent.document.form_busqueda.paginas.innerHTML="";		
			while (contador<=numfilas) {
				texto=contador + "-" + parseInt(contador+9);
				if (indi==contador) {
					parent.document.form_busqueda.paginas.options[indice]=new Option (texto,contador);
					parent.document.form_busqueda.paginas.options[indice].selected=true;
				} else {
					parent.document.form_busqueda.paginas.options[indice]=new Option (texto,contador);
				}
				indice++;
				contador=contador+10;
			}
		}
		</script>
	</head>

	<body onload=inicio()>	
		<div id="pagina">
			<div id="zonaContenidoPP">
			<div align="center">
			<table class="fuente8" width="100%" cellspacing=0 cellpadding=3 border=0 ID="Table1">
			<input type="hidden" name="numfilas" id="numfilas" value="<?php echo $filas?>">
				<?php $iniciopagina=$_REQUEST["iniciopagina"];
				if (empty($iniciopagina)) { $iniciopagina=$_REQUEST["iniciopagina"]; } else { $iniciopagina=$iniciopagina-1;}
				if (empty($iniciopagina)) { $iniciopagina=0; }
				if ($iniciopagina>$filas) { $iniciopagina=0; }
					if ($filas > 0) { ?>
						<?php $sel_resultado="SELECT * FROM formapago WHERE borrado=0 AND ".$where;
						   $sel_resultado=$sel_resultado."  limit ".$iniciopagina.",10";
						   $res_resultado=mysql_query($sel_resultado);
						   $contador=0;
						   while ($contador < mysql_num_rows($res_resultado)) { 
								 if ($contador % 2) { $fondolinea="itemParTabla"; } else { $fondolinea="itemImparTabla"; }?>
						<tr class="<?php echo $fondolinea?>">
							<td class="aCentro" width="12%"><?php echo $contador+1;?></td>
							<td width="20%"><div align="center"><?php echo mysql_result($res_resultado,$contador,"codformapago")?></div></td>
							<td width="50%"><div align="left"><?php echo mysql_result($res_resultado,$contador,"nombrefp")?></div></td>
							<td width="6%"><div align="center"><a href="#"><img src="../images/modificar.png" width="16" height="16" border="0" onClick="modificar_fp(<?php echo mysql_result($res_resultado,$contador,"codformapago")?>)" title="Modificar"></a></div></td>
														<td width="6%"><div align="center"><a href="#"><img src="../images/ver.png" width="16" height="16" border="0" onClick="ver_fp(<?php echo mysql_result($res_resultado,$contador,"codformapago")?>)" title="Visualizar"></a></div></td>
							<td width="6%"><div align="center"><a href="#"><img src="../images/eliminar.png" width="16" height="16" border="0" onClick="eliminar_fp(<?php echo mysql_result($res_resultado,$contador,"codformapago")?>)" title="Eliminar"></a></div></td>
						</tr>
						<?php $contador++;
							}
						?>			
					</table>
					<?php } else { ?>
					<table class="fuente8" width="85%" cellspacing=0 cellpadding=3 border=0>
						<tr>
							<td width="100%" class="mensaje"><?php echo "No hay ninguna forma de pago que cumpla con los criterios de b&uacute;squeda";?></td>
					    </tr>
					</table>					
					<?php } ?>					
				</div>
			</div>
		  </div>			
		</div>
	</body>
</html>
