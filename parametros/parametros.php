<?php
 session_start();
?>
<html>
<head>
<title>test -- parametros</title>
<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
<meta name="generator" http-equiv="content-type" content="text/html">
<style type="text/css">
</style>

</head>

<body>

<div id="pagina">
	<div id="zonaContenido">
		<div id="tituloForm_PAR" class="header" align="center"><table>Mantención de Par�metros</table></div>
<?php
  $conn = connect();
  $showrecs = 100;
  $pagerange = 100;
  $a = @$_REQUEST["a"];
  $recid = @$_REQUEST["recid"];
  $page = @$_REQUEST["page"];
  if (!isset($page)) $page = 1;
  $sql = @$_REQUEST["sql"];

  switch ($sql) {
    case "update":
      sql_update();
      break;
  }

  switch ($a) {
    case "edit":
      editrec($recid);
      break;
    default:
      select();
      break;
  }

  mysql_close($conn);
?>

<div id="Fondo_PAR" align="center">

<table width="100%"><tr><td class="header">CodeKa Mx version 1.6</td>
</tr></table></div>

</body>
</html>

<?php function select()
  {
  global $a;
  global $showrecs;
  global $page;
  $res = sql_select();
  $count = sql_getrecordcount();
  if ($count % $showrecs != 0) {
    $pagecount = intval($count / $showrecs) + 1;
  } else {
    $pagecount = intval($count / $showrecs);
  }
  $startrec = $showrecs * ($page - 1);

  if ($startrec < $count) {mysql_data_seek($res, $startrec);}
  $reccount = min($showrecs * $page, $count);
?>

<div id="frmBusqueda_PAR">
<table class="fuente8" width="98%" cellspacing="1" border=0>
<tr><td>Tabla de: Parametros</td>
<td>Registros <?php echo $startrec + 1 ?> - <?php echo $reccount ?> of <?php echo $count ?></td></tr>
</table></div>
<br>
<div id="TablaLarga_PAR"> 
<table class="fuente8" width="100%" border="0" cellspacing="1" cellpadding=3>
<tr class="cabeceraTabla">
<td >&nbsp;</td>
<td ><?php echo "Num. Factura" ?></td>
<td ><?php echo "Set Num. Factura" ?></td>
<td ><?php echo "Fondo Factura" ?></td>
<td ><?php echo "Imagen de la Factura" ?></td>
<td ><?php echo "Fondo Guia" ?></td>
<td ><?php echo "Imagen Guia" ?></td>
<td ><?php echo "Filas Detalle Fact." ?></td>
<td ><?php echo "IVA Imponible" ?></td>
<td ><?php echo "Nom. Moneda" ?></td>
<td ><?php echo "Simbolo Moneda" ?></td>
<td ><?php echo "Cod. Moneda" ?></td>
<td ><?php echo "Nombre Empresa" ?></td>
<td ><?php echo "Giro" ?></td>
<td ><?php echo "Fonos" ?></td>
<td ><?php echo "Direccion" ?></td>
<td ><?php echo "Comuna" ?></td>
<td ><?php echo "Ciudad" ?></td>
<td ><?php echo "Num. Fiscal" ?></td>
<td ><?php echo "Resolucion SII" ?></td>
<td ><?php echo "Rut Empresa" ?></td>
<td ><?php echo "Giro 2" ?></td>
</tr>
<?php
  for ($i = $startrec; $i < $reccount; $i++)  {
    $row = mysql_fetch_assoc($res);
    $style = "dr";
    if ($i % 2 != 0) {
      $style = "sr";
    }
?>

<tr class="cabeceraTabla_PAR">
<td ><a href="parametros.php?a=edit&recid=<?php echo $i ?>"><b>Editar</b></a></td>
<td ><?php echo htmlspecialchars($row["numeracionfactura"]) ?></td>
<td ><?php echo htmlspecialchars($row["setnumfac"]) ?></td>
<td ><?php echo htmlspecialchars($row["fondofac"]) ?></td>
<td ><?php echo htmlspecialchars($row["imagenfac"]) ?></td>
<td ><?php echo htmlspecialchars($row["fondoguia"]) ?></td>
<td ><?php echo htmlspecialchars($row["imagenguia"]) ?></td>
<td ><?php echo htmlspecialchars($row["filasdetallefactura"]) ?></td>
<td ><?php echo htmlspecialchars($row["ivaimp"]) ?></td>
<td ><?php echo htmlspecialchars($row["nombremoneda"]) ?></td>
<td ><?php echo htmlspecialchars($row["simbolomoneda"]) ?></td>
<td ><?php echo htmlspecialchars($row["codigomoneda"]) ?></td>
<td ><?php echo htmlspecialchars($row["nomempresa"]) ?></td>
<td ><?php echo htmlspecialchars($row["giro"]) ?></td>
<td ><?php echo htmlspecialchars($row["fonos"]) ?></td>
<td ><?php echo htmlspecialchars($row["direccion"]) ?></td>
<td ><?php echo htmlspecialchars($row["comuna"]) ?></td>
<td ><?php echo htmlspecialchars($row["ciudadactual"]) ?></td>
<td ><?php echo htmlspecialchars($row["numerofiscal"]) ?></td>
<td ><?php echo htmlspecialchars($row["resolucionsii"]) ?></td>
<td ><?php echo htmlspecialchars($row["rutempresa"]) ?></td>
<td ><?php echo htmlspecialchars($row["giro2"]) ?></td>
</tr>
<?php
  }
  mysql_free_result($res);
?>
</table> </div>
<br>
<?php showpagenav($page, $pagecount); ?>
<?php } ?>

<?php function showroweditor($row, $iseditmode)
  {
  global $conn;
?>
<table border="0" cellspacing="1" cellpadding="5"width="90%">
<tr>
<td class="hr"><?php echo htmlspecialchars("numeracionfactura")."&nbsp;" ?></td>
<td class="dr"><input type="text" name="numeracionfactura" size="50" value="<?php echo str_replace('"', '&quot;', trim($row["numeracionfactura"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("setnumfac")."&nbsp;" ?></td>
<td class="dr"><select name="setnumfac">
<option value=""></option>
<?php
  $lookupvalues = array("1","0");

  reset($lookupvalues);
  foreach($lookupvalues as $val){
  $caption = $val;
  if ($row["setnumfac"] == $val) {$selstr = " selected"; } else {$selstr = ""; }
 ?><option value="<?php echo $val ?>"<?php echo $selstr ?>><?php echo $caption ?></option>
<?php } ?></select>
</td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("imagenfac")."&nbsp;" ?></td>
<td class="dr"><input type="text" name="imagenfac" size="50" maxlength="65535" value="<?php echo str_replace('"', '&quot;', trim($row["imagenfac"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("fondofac")."&nbsp;" ?></td>
<td class="dr"><select name="fondofac">
<option value=""></option>

<?php
  $lookupvalues = array("SI","NO");

  reset($lookupvalues);
  foreach($lookupvalues as $val){
  $caption = $val;
  if ($row["fondofac"] == $val) {$selstr = " selected"; } else {$selstr = ""; }
 ?><option value="<?php echo $val ?>"<?php echo $selstr ?>><?php echo $caption ?></option>
<?php } ?></select>
</td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("imagenguia")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="imagenguia" maxlength="65535" value="<?php echo str_replace('"', '&quot;', trim($row["imagenguia"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("fondoguia")."&nbsp;" ?></td>
<td class="dr"><select name="fondoguia">
<option value=""></option>
<?php
  $lookupvalues = array("SI","NO");

  reset($lookupvalues);
  foreach($lookupvalues as $val){
  $caption = $val;
  if ($row["fondoguia"] == $val) {$selstr = " selected"; } else {$selstr = ""; }
 ?><option value="<?php echo $val ?>"<?php echo $selstr ?>><?php echo $caption ?></option>
<?php } ?></select>
</td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("filasdetallefactura")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="filasdetallefactura" value="<?php echo str_replace('"', '&quot;', trim($row["filasdetallefactura"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("ciudadactual")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="ciudadactual" value="<?php echo str_replace('"', '&quot;', trim($row["ciudadactual"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("ivaimp")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="ivaimp" maxlength="20" value="<?php echo str_replace('"', '&quot;', trim($row["ivaimp"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("nombremoneda")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="nombremoneda" maxlength="20" value="<?php echo str_replace('"', '&quot;', trim($row["nombremoneda"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("simbolomoneda")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="simbolomoneda" maxlength="10" value="<?php echo str_replace('"', '&quot;', trim($row["simbolomoneda"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("nomempresa")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="nomempresa" value="<?php echo str_replace('"', '&quot;', trim($row["nomempresa"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("giro")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="giro" maxlength="50" value="<?php echo str_replace('"', '&quot;', trim($row["giro"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("fonos")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="fonos" maxlength="30" value="<?php echo str_replace('"', '&quot;', trim($row["fonos"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("direccion")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="direccion" maxlength="30" value="<?php echo str_replace('"', '&quot;', trim($row["direccion"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("comuna")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="comuna" maxlength="30" value="<?php echo str_replace('"', '&quot;', trim($row["comuna"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("codigomoneda")."&nbsp;" ?></td>
<td class="dr"><input type="text" name="codigomoneda" size="50" maxlength="30" value="<?php echo str_replace('"', '&quot;', trim($row["codigomoneda"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("numerofiscal")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="numerofiscal" maxlength="20" value="<?php echo str_replace('"', '&quot;', trim($row["numerofiscal"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("resolucionsii")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="resolucionsii" maxlength="50" value="<?php echo str_replace('"', '&quot;', trim($row["resolucionsii"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("rutempresa")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="rutempresa" maxlength="20" value="<?php echo str_replace('"', '&quot;', trim($row["rutempresa"])) ?>"></td>
</tr>
<tr>
<td class="hr"><?php echo htmlspecialchars("giro2")."&nbsp;" ?></td>
<td class="dr"><input type="text" size="50" name="giro2" maxlength="50" value="<?php echo str_replace('"', '&quot;', trim($row["giro2"])) ?>"></td>
</tr>
</table>
<?php } ?>

<?php function showpagenav($page, $pagecount)
{
?>
<table class="bd" border="0" cellspacing="1" cellpadding="4">
<tr>
<?php if ($page > 1) { ?>
<td><a href="parametros.php?page=<?php echo $page - 1 ?>">&lt;&lt;&nbsp;Prev</a>&nbsp;</td>
<?php } ?>
<?php
  global $pagerange;

  if ($pagecount > 1) {

  if ($pagecount % $pagerange != 0) {
    $rangecount = intval($pagecount / $pagerange) + 1;
  } else {
    $rangecount = intval($pagecount / $pagerange);
  }
  for ($i = 1; $i < $rangecount + 1; $i++) {
    $startpage = (($i - 1) * $pagerange) + 1;
    $count = min($i * $pagerange, $pagecount);

    if ((($page >= $startpage) && ($page <= ($i * $pagerange)))) {
      for ($j = $startpage; $j < $count + 1; $j++) {
        if ($j == $page) {
?>
<td><b><?php echo $j ?></b></td>
<?php } else { ?>
<td><a href="parametros.php?page=<?php echo $j ?>"><?php echo $j ?></a></td>
<?php } } } else { ?>
<td><a href="parametros.php?page=<?php echo $startpage ?>"><?php echo $startpage ."..." .$count ?></a></td>
<?php } } } ?>
<?php if ($page < $pagecount) { ?>
<td>&nbsp;<a href="parametros.php?page=<?php echo $page + 1 ?>">Next&nbsp;&gt;&gt;</a>&nbsp;</td>
<?php } ?>
</tr>
</table>
<?php } ?>

<?php function showrecnav($a, $recid, $count)
{
?>
<div id="frmBusqueda_PAR">
<table class="fuente8" width="98%" cellspacing="1" border=0>
<tr align="right">
<td><a href="parametros.php"><img src="../images/botonvolver.png" width="69" height="22" border="1"></a></td>
<?php if ($recid > 0) { ?>
<td><a href="parametros.php?a=<?php echo $a ?>&recid=<?php echo $recid - 1 ?>">Prior Record</a></td>
<?php } if ($recid < $count - 1) { ?>
<td><a href="parametros.php?a=<?php echo $a ?>&recid=<?php echo $recid + 1 ?>">Next Record</a></td>
<?php } ?>
</tr>
</table>
</div>

<?php } ?>

<?php function editrec($recid)
{
  $res = sql_select();
  $count = sql_getrecordcount();
  mysql_data_seek($res, $recid);
  $row = mysql_fetch_assoc($res);
  showrecnav("edit", $recid, $count);
?>
<br>
<div id="TablaLarga_PAR2" align="Center">
<form enctype="multipart/form-data" action="parametros.php" method="post">
<input type="hidden" name="sql" value="update">
<input type="hidden" name="xnumeracionfactura" value="<?php echo $row["numeracionfactura"] ?>">
<input type="hidden" name="xsetnumfac" value="<?php echo $row["setnumfac"] ?>">
<input type="hidden" name="ximagenfac" value="<?php echo $row["imagenfac"] ?>">
<input type="hidden" name="ximagenguia" value="<?php echo $row["imagenguia"] ?>">
<input type="hidden" name="xfilasdetallefactura" value="<?php echo $row["filasdetallefactura"] ?>">
<input type="hidden" name="xivaimp" value="<?php echo $row["ivaimp"] ?>">
<input type="hidden" name="xnombremoneda" value="<?php echo $row["nombremoneda"] ?>">
<input type="hidden" name="xsimbolomoneda" value="<?php echo $row["simbolomoneda"] ?>">
<input type="hidden" name="xcodigomoneda" value="<?php echo $row["codigomoneda"] ?>">
<input type="hidden" name="xnomempresa" value="<?php echo $row["nomempresa"] ?>">
<input type="hidden" name="xgiro" value="<?php echo $row["giro"] ?>">
<input type="hidden" name="xfonos" value="<?php echo $row["fonos"] ?>">
<input type="hidden" name="xdireccion" value="<?php echo $row["direccion"] ?>">
<input type="hidden" name="xcomuna" value="<?php echo $row["comuna"] ?>">
<input type="hidden" name="xciudadactual" value="<?php echo $row["ciudadactual"] ?>">
<input type="hidden" name="xnumerofiscal" value="<?php echo $row["numerofiscal"] ?>">
<input type="hidden" name="xresolucionsii" value="<?php echo $row["resolucionsii"] ?>">
<input type="hidden" name="xrutempresa" value="<?php echo $row["rutempresa"] ?>">
<input type="hidden" name="xgiro2" value="<?php echo $row["giro2"] ?>">
<?php showroweditor($row, true); ?>
<br>
<div align="center"><input type="submit" name="action" value="Guardar Par�metros"></div>
</form>
</div>
<?php
  mysql_free_result($res);
} ?>

<?php function connect()
{
/* 
 * Estos son los valores que tienes que ajustar para que funcione
 * el men� de par�metros se encuentra ahora ajustado automaticamente.
 *  
 * 
*/
 include("../config.php");
  
  $conn = mysql_connect($Servidor,$Usuario,$Password) or die("Error : El servidor no puede conectar con la base de datos");
  $descriptor=mysql_select_db($BaseDeDatos, $conn)or die("Error : Seleccionando la base de datos.");
  return $conn;
}
function sqlvalue($val, $quote)
{
  if ($quote)
    $tmp = sqlstr($val);
  else
    $tmp = $val;
  if ($tmp == "")
    $tmp = "NULL";
  elseif ($quote)
    $tmp = "'".$tmp."'";
  return $tmp;
}

function sqlstr($val)
{
  return str_replace("'", "''", $val);
}

function sql_select()
{
  global $conn;
  $sql = "SELECT `numeracionfactura`, `setnumfac`, `fondofac`, `imagenfac`, `fondoguia`, `imagenguia`, `filasdetallefactura`, `ivaimp`, `nombremoneda`, `simbolomoneda`, `codigomoneda`, `nomempresa`, `giro`, `fonos`, `direccion`, `comuna`, `ciudadactual`, `numerofiscal`, `resolucionsii`, `rutempresa`, `giro2` FROM `parametros`";
  $res = mysql_query($sql, $conn) or die(mysql_error());
  return $res;
}

function sql_getrecordcount()
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM `parametros`";
  $res = mysql_query($sql, $conn) or die(mysql_error());
  $row = mysql_fetch_assoc($res);
  reset($row);
  return current($row);
}

function sql_update()
{
  global $conn;
  global $_REQUEST;

  $sql = "update `parametros` set `numeracionfactura`=" .sqlvalue(@$_REQUEST["numeracionfactura"], false).", `setnumfac`=" .sqlvalue(@$_REQUEST["setnumfac"], false).", `imagenfac`=" .sqlvalue(@$_REQUEST["imagenfac"], true).", `fondofac`=" .sqlvalue(@$_REQUEST["fondofac"], true).", `imagenguia`=" .sqlvalue(@$_REQUEST["imagenguia"], true).", `fondoguia`=" .sqlvalue(@$_REQUEST["fondoguia"], true).", `filasdetallefactura`=" .sqlvalue(@$_REQUEST["filasdetallefactura"], false).", `ciudadactual`=" .sqlvalue(@$_REQUEST["ciudadactual"], true).", `ivaimp`=" .sqlvalue(@$_REQUEST["ivaimp"], false).", `nombremoneda`=" .sqlvalue(@$_REQUEST["nombremoneda"], true).", `simbolomoneda`=" .sqlvalue(@$_REQUEST["simbolomoneda"], true).", `nomempresa`=" .sqlvalue(@$_REQUEST["nomempresa"], true).", `giro`=" .sqlvalue(@$_REQUEST["giro"], true).", `fonos`=" .sqlvalue(@$_REQUEST["fonos"], true).", `direccion`=" .sqlvalue(@$_REQUEST["direccion"], true).", `comuna`=" .sqlvalue(@$_REQUEST["comuna"], true).", `codigomoneda`=" .sqlvalue(@$_REQUEST["codigomoneda"], true).", `numerofiscal`=" .sqlvalue(@$_REQUEST["numerofiscal"], true).", `resolucionsii`=" .sqlvalue(@$_REQUEST["resolucionsii"], true).", `rutempresa`=" .sqlvalue(@$_REQUEST["rutempresa"], true).", `giro2`=" .sqlvalue(@$_REQUEST["giro2"], true) ." where " .primarykeycondition();

  mysql_query($sql, $conn) or die(mysql_error());
}

function primarykeycondition()
{
  global $_REQUEST;
  $pk = "";
  $pk .= "(`numeracionfactura`";
  if (@$_REQUEST["xnumeracionfactura"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xnumeracionfactura"], false);
  };
  $pk .= ") and ";
  $pk .= "(`setnumfac`";
  if (@$_REQUEST["xsetnumfac"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xsetnumfac"], false);
  };
  $pk .= ") and ";
  $pk .= "(`imagenfac`";
  if (@$_REQUEST["ximagenfac"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["ximagenfac"], true);
  };
  $pk .= ") and ";
  $pk .= "(`imagenguia`";
  if (@$_REQUEST["ximagenguia"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["ximagenguia"], true);
  };
  $pk .= ") and ";
  $pk .= "(`filasdetallefactura`";
  if (@$_REQUEST["xfilasdetallefactura"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xfilasdetallefactura"], false);
  };
  $pk .= ") and ";
  $pk .= "(`ivaimp`";
  if (@$_REQUEST["xivaimp"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xivaimp"], false);
  };
  $pk .= ") and ";
  $pk .= "(`nombremoneda`";
  if (@$_REQUEST["xnombremoneda"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xnombremoneda"], true);
  };
  $pk .= ") and ";
  $pk .= "(`simbolomoneda`";
  if (@$_REQUEST["xsimbolomoneda"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xsimbolomoneda"], true);
  };
  $pk .= ") and ";
  $pk .= "(`codigomoneda`";
  if (@$_REQUEST["xcodigomoneda"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xcodigomoneda"], true);
  };
  $pk .= ") and ";
  $pk .= "(`nomempresa`";
  if (@$_REQUEST["xnomempresa"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xnomempresa"], true);
  };
  $pk .= ") and ";
  $pk .= "(`giro`";
  if (@$_REQUEST["xgiro"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xgiro"], true);
  };
  $pk .= ") and ";
  $pk .= "(`fonos`";
  if (@$_REQUEST["xfonos"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xfonos"], true);
  };
  $pk .= ") and ";
  $pk .= "(`direccion`";
  if (@$_REQUEST["xdireccion"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xdireccion"], true);
  };
  $pk .= ") and ";
  $pk .= "(`comuna`";
  if (@$_REQUEST["xcomuna"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xcomuna"], true);
  };
  $pk .= ") and ";
  $pk .= "(`ciudadactual`";
  if (@$_REQUEST["xciudadactual"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xciudadactual"], true);
  };
  $pk .= ") and ";
  $pk .= "(`numerofiscal`";
  if (@$_REQUEST["xnumerofiscal"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xnumerofiscal"], true);
  };
  $pk .= ") and ";
  $pk .= "(`resolucionsii`";
  if (@$_REQUEST["xresolucionsii"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xresolucionsii"], true);
  };
  $pk .= ") and ";
  $pk .= "(`rutempresa`";
  if (@$_REQUEST["xrutempresa"] == "") {
    $pk .= " IS NULL";
  }else{
  $pk .= " = " .sqlvalue(@$_REQUEST["xrutempresa"], true);
  };
  $pk .= ") and ";
  $pk .= "(`giro2`";
  if (@$_REQUEST["xgiro2"] == "") {
    $pk .= " IS NULL";
  }else{
 $pk .= " = " .sqlvalue(@$_REQUEST["xgiro2"], true);
 };
  $pk .= ")";
  return $pk;
}
 ?>
</div>
</div>
