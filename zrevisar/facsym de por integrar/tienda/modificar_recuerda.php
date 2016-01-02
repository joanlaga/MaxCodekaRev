<?
require("../aut_verifica.inc.php"); // incluir motor de autentificación.
$nivel_acceso=0; // definir nivel de acceso para esta página.
if ($nivel_acceso < $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
    /*  
  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
	
		Autores: Luis Ignacio Albacete

	Fecha Liberación del código: 07/10/2007
	Factusyn 2007 -- Murcia	
		 
	
	*/

?>
<html>
<head>
<title>Factusyn</title>
<link href="../estilo.css" rel="stylesheet" type="text/css">
<script src="../efectos/SpryCollapsiblePanel.js" type="text/javascript"></script>
</head>
<body>
<p><img src="../imagenes/mensajes/utilidadestienda.png" title="Administraci&oacute;n de Tienda"><br>
  <br>
  
  <? include ("../conectar.php");
$consulta = "select * from tiendarecu where id='$cod'";
$resultado = mysql_query($consulta, $conexion);
$lafila=mysql_fetch_array($resultado); ?>
  <? if ($ini=="1") {
  if (empty($errores)) { include ("grabar_modificar_recuerda.php"); 
  exit; } }
?>
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="modificar_recuerda.php">
  <? print $errores; ?>
    <div id="CollapsiblePanel1" class="CollapsiblePanel">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="5px" height="23"> <a href="../principal.php"><img src="../imagenes/mensajes/botoniz.png" alt="Cerrar" border="0"></a></td>
    <td width="5px" height="23"> <a href="../principal.php"><img src="../imagenes/mensajes/botonce.png" alt="Minimizar" border="0"></a></td>
     <td width="5px" height="23"> <a href="laterales.php" target="_blank"><img src="../imagenes/mensajes/botonde.png" alt="Maximizar" border="0"></a></td>      
    <td height="23" background="../imagenes/mensajes/top.gif"><div align="center" <font size="2">Modificar Recuerda</font></div></td>
    
      <td width="30px" height="23">
          
        <div class="CollapsiblePanelTab" tabindex="0"><img src="../imagenes/mensajes/topder.gif"></div>
          </td>
    </tr>
  </table>
   <div class="CollapsiblePanelContent">
   
  <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#0066FF" class="rayas">
    <tr>
      <td width="28%" class="barraazul"><strong>Titulo:</strong></td>
      <? if ($ini=="0") { ?>
	  <td width="72%"><input name="uno" type="text" id="uno" size="50" maxlength="50" value="<? echo $lafila["alto"]; ?>"></td>
	  <? } else { ?>
      <td width="72%"><input name="uno" type="text" id="uno" size="50" maxlength="50" value="<? echo $uno; ?>"></td>
	  <? } ?>
    </tr>
    <tr>
      <td valign="top" class="barraazul"><strong>Observaciones:</strong></td>
	  <? if ($ini=="0") { ?>
      <td><input name="dos" type="text" id="dos" size="50" maxlength="100" value="<? echo $lafila["bajo"]; ?>"></td>
	  <? } else { ?>
      <td><input name="dos" type="text" id="dos" size="50" maxlength="100" value="<? echo $dos; ?>"></td>
	  <? } ?>
    </tr>
  </table>
      </div>
    </div>
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
      <td width="14px" height="20" background="../imagenes/mensajes/pieiz.gif"></td>
      <td height="20" background="../imagenes/mensajes/pie.gif">&nbsp;</td>
      <td width="22px" height="20" background="../imagenes/mensajes/pieder.gif"></td>
    </tr>
  </table>
 
         <br>
         <div align="center">
          
    <input type="submit" name="Submit" value="Aceptar Modificacion">
		  <input type="hidden" name="ini" value="1">
		  <input type="hidden" name="cod" value="<? echo $cod; ?>">
		  <input type="hidden" name="errores" value="<? echo $errores; ?>">
          <br>
          <br>
</form>

<? @mysql_free_result($resultado); ?>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
//-->
</script>
</body>
</html>
