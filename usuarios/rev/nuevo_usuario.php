<?
require("../configuraciones/aut_verifica.inc.php"); // incluir motor de autentificaci�n.
$nivel_acceso=0; // definir nivel de acceso para esta p�gina.
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
	
	Luis Ignacio Albacete

	Fecha Liberaci�n del c�digo: 01/01/2008
	Factusyn 2008 -- Murcia	
			 
	
	*/
	
?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
-->
</style>
</head>
<? include ("../configuraciones/conectar.php"); 
  // defino las variables de si existe factusyn Os, Tpvsyn y los fondos de pantalla que tengo guardados
  $os = '../os.php';
  $tpv = '../tpv.php';
  
?>
<body>
<br>
<? if ($ini=="1") {
  include ("usuarioscontrolerrores.php");
  if (empty($errores)) { include ("grabar_nuevo_usuario.php"); ?>
    <? exit; } }
?>
<form name="form1" method="post" action="nuevo_usuario.php">
<?
if (!empty ($errores)) {
?>
     <script language="javascript">
	     alert(" <?=$errores?> ");
	 </script> 
<? } 

$dato=("Insertar Nuevo Usuario");
include ("../efectos/cuadroalto.php"); 
?>
  <table border="0" align="center" cellpadding="0" cellspacing="0" class="rayas">
    <tr> 
      <td width="30%" class="barraazul">Nombre y apellidos:</td>
      <? if ($ini=="0") { ?>
      <td width="70%"><input name="nombre" type="text" id="nombre" size="50" maxlength="50"></td>
      <? } else { ?>
      <td width="40%"><input name="nombre" type="text" id="nombre" size="50" maxlength="50" value="<? echo $nombre; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">CIF/NIF:</td>
      <? if ($ini=="0") { ?>
      <td><input name="nif" type="text" id="nif" size="14" maxlength="14">     </td>
      <? } else { ?>
      <td><input name="nif" type="text" id="nif" size="14" maxlength="14" value="<? echo $nif; ?>">   <label>
        <input name="verifica" type="checkbox" id="verifica" value="no">
      No Validar</label></td>
      <? } ?>
    </tr>	
    <tr> 
      <td class="barraazul">Direcci�n:</td>
      <? if ($ini=="0") { ?>
      <td><input name="direccion" type="text" id="direccion" size="40" maxlength="40"></td>
      <? } else { ?>
      <td><input name="direccion" type="text" id="direccion" size="40" maxlength="40" value="<? echo $direccion; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">Localidad:</td>
      <? if ($ini=="0") { ?>
      <td><input name="localidad" type="text" id="localidad" size="30" maxlength="30"></td>
      <? } else { ?>
      <td><input name="localidad" type="text" id="localidad" size="30" maxlength="30" value="<? echo $localidad; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">C�digo postal:</td>
      <? if ($ini=="0") { ?>
      <td><input name="cp" type="text" id="cp" size="5" maxlength="5"></td>
      <? } else { ?>
      <td><input name="cp" type="text" id="cp" size="5" maxlength="5" value="<? echo $cp; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">Provincia:</td>
      <td> <select name="provincia">
          <option selected> 
          <?
        $consulta = "Select * from provincias order by denprovincia";
        $resultado = mysql_query($consulta, $conexion);
        $lafila=mysql_fetch_array($resultado);
        do
          {
            if ($lafila["codprovincia"]==$provincia) { ?>
          <option selected value="<? echo $lafila["codprovincia"] ?>"> <? echo $lafila["denprovincia"];
				   } else { ?> 
          <option value="<? echo $lafila["codprovincia"] ?>"> <? echo $lafila["denprovincia"]; } ?>          </option>
          <? }
               while ($lafila=mysql_fetch_array($resultado)); ?>
        </select> </td>
    </tr>
    <tr> 
      <td class="barraazul">Tel&eacute;fono:</td>
      <? if ($ini=="0") { ?>
      <td><input name="telefono" type="text" id="telefono" size="12" maxlength="20"></td>
      <? } else { ?>
      <td><input name="telefono" type="text" id="telefono" size="12" maxlength="20" value="<? echo $telefono; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">M&oacute;vil:</td>
      <? if ($ini=="0") { ?>
      <td><input name="movil" type="text" id="movil2" size="12" maxlength="20"></td>
      <? } else { ?>
      <td><input name="movil" type="text" id="movil2" size="12" maxlength="20" value="<? echo $movil; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">Correo electr&oacute;nico:</td>
      <? if ($ini=="0") { ?>
      <td><input name="correo" type="text" id="correo" size="50" maxlength="50"></td>
      <? } else { ?>
      <td><input name="correo" type="text" id="correo" size="50" maxlength="50" value="<? echo $correo; ?>"></td>
      <? } ?>
    </tr>
    <tr> 
      <td class="barraazul">Comision:</td>
      <? if ($ini=="0") { ?>
      <td><input name="comision" type="text" id="comision" size="5" maxlength="3">
      %</td>
      <? } else { ?>
      <td><input name="comision" type="text" id="comision" size="5" maxlength="3" value="<? echo $comision; ?>">%</td>
      <? } ?>
    </tr>
	    <tr>
		   <td width="30%" class="barraazul">
		     Acceso:		   </td>
		   <td width="70%">
		   <select name="nivel">
         <option value="3">Comercial</option>
         <option value="2">Asesoria</option>
         <option value="1" selected>Usuario</option>
         <option value="0">Administrador</option>
             </select>        </td>
    </tr>
		 <tr>
		   <td width="30%" class="barraazul">
		     Dise�o del Programa:		   </td>
		   <td width="70%">
		     <select name="entrada">
         <? if (file_exists ($os)) {
         ?>
         <option value="os" selected>Os</option>
         <option value="clasico">Clasico</option>
		 <? } else { ?>
         <option value="clasico" selected>Clasico</option> 
         <? }
		 if (file_exists ($tpv)) {
		 ?>
         <option value="tpv" selected>Tpv</option>
         <? } ?>
             </select>
		    </td>
		 </tr>
           <?  // si tenemos factusyn con entorno chachi lo muestro si no kk
	   if (file_exists ($os)) {
	   ?>    
        <tr>
		   <td width="30%" class="barraazul">
		     Mostrar Dock:		   </td>
		   <td width="70%">
		     <select name="dock">
         <option value="1" selected>Si</option>
         <option value="0">No</option>
          </select>       </td>
		 </tr>
         <tr>
		   <td width="30%" class="barraazul">
		     Decoracion Ventanas:		   </td>
		   <td width="70%">
		     <select name="ventanas">
         <option value="vista_glass" selected>Vista Cristal</option>
         <option value="vista_normal">Vista Guarro</option>
         <option value="os_x">Mac Os X</option>
         <option value="alphacube">Blanco</option>
         <option value="spread">Verde</option>
          </select>       </td>
		 </tr>
         <? } ?>
         <tr>
		   <td width="30%" class="barraroja">
		     <div align="left">Nombre Usuario (*):		   </div></td>
		   <td width="70%">
		     <input name="usuario" size="20" maxlength="20">		   </td>
    </tr>
		 <tr>
		   <td width="30%" class="barraroja">
		     <div align="left">Password (*):		   </div></td>
		   <td width="70%">
		     <input name="password" type="password" size="20" maxlength="20">       </td>
		 </tr>   
     <tr> 
      <td valign="top" class="barraazul">Observaciones:</td>
      <? if ($ini=="0") { ?>
      <td><textarea name="observaciones" cols="50" rows="5" id="observaciones"></textarea></td>
      <? } else { ?>
      <td><textarea name="observaciones" cols="50" rows="5" id="observaciones"><? echo $observaciones; ?></textarea></td>
      <? } ?>
    </tr>
  </table>
<? include ("../efectos/cuadrobajo.php"); ?>  
		<p></p>
		<div align="center"> 
          <input type="submit" name="Submit" value="Aceptar Usuario">
          <input type="hidden" name="errores" value="<? echo $errores; ?>">
          <input type="hidden" name="ini" value="1">
        </div>

</form>
</body>
  <? 
 @mysql_free_result($resultado);
  ?>
</html>
