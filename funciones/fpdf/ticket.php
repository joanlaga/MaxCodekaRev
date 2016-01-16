<?php
include("comunes.php");
require_once(OBIB_CONF."conectar.php");
require_once(OBIB_FUN."fechas.php");
//require_once($_SERVER[DOCUMENT_ROOT]."/git/maxcodekarev/configuraciones/conectar.php");

//include ("../funciones/fechas.php");
$codfactura=$_REQUEST["codfactura"];
$pagado=$_REQUEST["pagado"];
$adevolver=$_REQUEST["adevolver"];
$hora=date("H:i:s");
$sel_facturas="SELECT * FROM facturas INNER JOIN cobros ON facturas.codfactura=cobros.codfactura INNER JOIN formapago ON cobros.codformapago=formapago.codformapago WHERE facturas.codfactura='$codfactura'";
$rs_factura=mysql_query($sel_facturas); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TICKET</title>
<script type="text/javascript">
function imprimir() {
	window.print();
	window.close();
}
</script>
</head>

<body onLoad="imprimir()">
<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>

<table width="69%" border="0">
  <tr>
    <td><span class="Estilo3"><strong><?php echo $nomempresa ?></strong></span></td>
  </tr>
  <tr>
    <td><span class="Estilo3"><?php echo $giro ?></span></td>
  </tr>
  <tr>
    <td><span class="Estilo3"><?php echo $giro2 ?></span></td>
  </tr>
  <!-- El RUT no se aplica en mexico
  <tr>
    <td><span class="Estilo3">RUT: <?php echo $rutempresa ?></span></td>
  </tr>
  -->
  
  <!-- en lugar de nmero fiscal cambia a RFC -->
  <tr>
    <td><span class="Estilo3">RFC: <?php echo $numerofiscal ?></span></td>
  </tr>
  
  <!-- No aplica en Mexico 
  <tr>
    <td><span class="Estilo3">Res. SII: <?php echo $resolucionsii ?></span></td>
  </tr>
  -->
  
  <tr>
    <td><span class="Estilo3"><?php echo $direccion ?>, <?php echo $comuna ?></span></td>
  </tr>
  <tr>
    <td><span class="Estilo3">Ciudad <?php echo $CiudadActual ?> </span></td>
  </tr>
  <tr>
    <td><span class="Estilo3">Telefono: <?php echo $fonos ?></span></td>
  </tr>
  <tr>
    <td>=============================================</td>
  </tr>
  <tr>
    <td><span class="Estilo3">TICKET N: <?php echo $codfactura?></span></td>
  </tr>
  <tr>
    <td><span class="Estilo3">FECHA: <?php echo implota(mysql_result($rs_factura,0,"fechacobro"))?></span></td>
  </tr>
  <tr>
    <td><span class="Estilo3">HORA: <?php echo $hora?></span></td>
  </tr>
  
</table>
<br />

<table width="69%" border="0">
  <tr>
    <td width="10%" class="Estilo3"><div align="center"><strong>CANTIDAD</strong></div></td>
    <td width="38%" class="Estilo3"><div align="center"><strong>ARTICULO</strong></div></td>
    <td width="16%" class="Estilo3"><div align="rigth"> <strong>PRECIO</strong></div></td>
	<td width="9%"  class="Estilo3"><div align="rigth"> <strong>DESC.</strong></div></td>
	<td width="27%" class="Estilo3"><div align="rigth"> <strong>IMPORTE</strong></div></td>
  </tr>
<?php
	$sel_lineas="SELECT factulinea.*,articulos.* FROM factulinea,articulos WHERE factulinea.codfactura='$codfactura' AND factulinea.codigo=articulos.codarticulo ORDER BY factulinea.numlinea ASC";
	$rs_lineas=mysql_query($sel_lineas);
		$preciototal=0;
		$iva=0;
		$preciofinal=0;
	for ($i = 0; $i < mysql_num_rows($rs_lineas); $i++) { 	
		$descripcion=mysql_result($rs_lineas,$i,"descripcion");
		$cantidad=mysql_result($rs_lineas,$i,"cantidad");
		$precio=mysql_result($rs_lineas,$i,"precio_tienda");
		$descuento=mysql_result($rs_lineas,$i,"dcto");
		$importe=mysql_result($rs_lineas,$i,"importe");
		$ivaticket=mysql_result($rs_factura,0,"iva");
		
		//$importe=$cantidad*$precio;
		
		$preciototal=$preciototal+$importe;
		$iva=$preciototal*($ivaticket/100);
		$preciofinal=$preciototal+$iva;?>
		<tr>
   		  <td width="10%" class="Estilo3"><div align="center"><?php echo number_format( $cantidad,1,".",","); ?></div></td>
			<td width="38%" class="Estilo3"><div align="center"><?php echo substr($descripcion,0,25) ?></div></td>
			<td width="16%" class="Estilo3"><div align="rigth"><?php echo $precio ?></div></td>
		  <td width="9%" class="Estilo3"><div align="rigth"><?php echo $descuento ?> % </div></td>
			<td width="27%" class="Estilo3"><div align="rigth"><?php echo number_format($importe,2,".",","); ?> </div></td>
  		</tr>
		<?php
	}
$preciofinal=$preciofinal;	
?>
</table>
<br />
<table width="65%" border="0">
  <tr>
    <td class="Estilo3"><div align="right">-------------------------</div></td>
  </tr>			
  <tr>
    <td class="Estilo3"><div align="right">  Subtotal: <?php echo $simbolomoneda ?><?php echo number_format($preciototal,2,".",",")?></div></td>
  </tr>		
  <tr>
    <td class="Estilo3"><div align="right">       IVA: <?php echo $simbolomoneda ?><?php echo number_format($iva,2,".",",")?></div></td>
  </tr>	
  <tr>
    <td class="Estilo3"><div align="right">     Total: <?php echo $simbolomoneda ?><?php echo number_format($preciofinal,2,".",",")?></div></td>
  </tr>
</table>
<table width="69%" border="0">

  <tr>
    <td class="Estilo3">Pago    : <?php echo $simbolomoneda ?><?php echo @number_format($pagado,2, ".",",")?></td>
  </tr>
  <tr>
    <td class="Estilo3">Cambio  : <?php echo $simbolomoneda ?><?php echo @number_format($adevolver,2, ".",",")?></td>
  </tr>
  <tr>
    <td><span class="Estilo3">Forma de pago: <?php echo mysql_result($rs_factura,0,"nombrefp")?></span></td>
  </tr>
  
</table>
<table width="69%" border="0">
<tr>
    <td>=============================================</td>
  </tr>
  <tr>
    <td><span class="Estilo3"><div align="center">Gracias por su visita a....<strong><?php echo $nomempresa ?></strong></span></div></td>
<!--    <td class="Estilo3"><div align="center">Gracias por su visita a <strong> El Mezquite</strong>.</div></td>
 -->
 </tr>
</table>
</body>
</html>
