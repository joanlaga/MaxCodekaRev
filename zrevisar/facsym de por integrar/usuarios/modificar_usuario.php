<?
require("../configuraciones/aut_verifica.inc.php"); // incluir motor de autentificación.
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
	
	Fecha Liberación del código: 15/10/2007
	Factusyn 2007 -- Murcia			 
	
	*/

?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {color: #0000FF}
.Estilo2 {font-size: 9px}
.Estilo4 {
	font-size: 12px;
	color: #0000FF;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
  <div align="right">
    <?
// defino las variables de si existe factusyn Os, Tpvsyn y los fondos de pantalla que tengo guardados
  $os = '../os.php';
  $tpv = '../tpv.php';
  
 include("../configuraciones/conectar.php");
 
$consulta = "select * from operarios where codoperario=$cod";
$resultado = mysql_query($consulta, $conexion);
$lafila=mysql_fetch_array($resultado);  

$nombre=$lafila["nombre"];
$apellidos=$lafila["apellidos"];
$direccion=$lafila["direccion"];
$dni=$lafila["nif"];
$telefono=$lafila["telefono"];
$movil=$lafila["movil"];
$comision=$lafila["comision"];
$mail=$lafila["mail"];
$observaciones=$lafila["observaciones"];
$provincia=$lafila["provincia"];
$cp=$lafila["cp"];
$localidad=$lafila["localidad"];
$foto=$lafila["afoto"];


   $consulta2 = "Select * from user_list where ID=$cod";
   $resultado2 = mysql_query($consulta2, $conexion);
   $usuarios=mysql_fetch_array($resultado2);
   $usuario=$usuarios["usuario"];
   $nivela=$usuarios["nivel_acceso"];
   $ventanas=$usuarios["ventanas"];
   $docki=$usuarios["dock"];
   $entrada=$usuarios["entrada"];
   
//definimos el nombre segun el codigo de acceso
 if ($nivela=="0") $nivel="Administrador";
  if ($nivela=="1") $nivel="Usuario";
   if ($nivela=="2") $nivel="Asesoria";
    if ($nivela=="3") $nivel="Comercial";
	  if ($nivela=="4") $nivel="Cliente";
//definimos el nombre del dock
 if ($docki=="0") $dock="No";
 if ($docki=="1") $dock="Si";

//definimos el nombre De las ventanas
 if ($ventanas=="vista_glass") $ventana="Vista Cristal";
  if ($ventanas=="vista_normal") $ventana="Vista Guarro";
   if ($ventanas=="os_x") $ventana="Mac Os X";
    if ($ventanas=="alphacube") $ventana="Blanco";
	  if ($ventanas=="spread") $ventana="Verde";
		  
$dato=("Modificar Usuario");
include ("../efectos/cuadroalto.php"); 
?>
  <table border="0" align="center" cellpadding="0" cellspacing="0" class="rayas">
<form action="grabar_modificar_usuario.php" method="post" enctype="multipart/form-data">
    <tr> 
      <td width="30%" class="barraazul">Nombre y apellidos:</td>
      <td width="70%"><input name="nombre" type="text" id="nombre" size="50" maxlength="60" value="<? echo $nombre; ?>">      </td>
      <td width="10%" rowspan="7">
      <? //si tiene imagen la muestro y si no saco al gordo feo
		if (empty($foto)) { $foto="gordo.png"; }
		?>
    <img src="../imagenes/trabajadores/<?=$foto?>" width="100" height="100" border="1"><br>    </td>
    </tr>
    <tr> 
      <td class="barraazul">CIF/NIF:</td>
    
      <td><input name="nif" type="text" id="nif" size="10" maxlength="15" value="<? echo $dni; ?>"></td>
      <td width="50"></td>
    </tr>	
    <tr> 
      <td class="barraazul">Dirección:</td>
    
      <td><input name="direccion" type="text" id="direccion" size="50" maxlength="60" value="<? echo $direccion; ?>"></td>
      <td width="50"></td>
    </tr>
    <tr> 
      <td class="barraazul">Localidad:</td>
      
      <td><input name="localidad" type="text" id="localidad" size="50" maxlength="60" value="<? echo $localidad; ?>"></td>
      <td width="50"></td>
    </tr>
    <tr> 
      <td class="barraazul">Código postal:</td>
    
      <td><input name="cp" type="text" id="cp" size="10" maxlength="10" value="<? echo $cp; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Provincia:</td>
      <td> 
          <?
		if (empty ($provincia)) { $provnombre="El Mundo"; } else {
        $consulta = "Select * from provincias where codprovincia=$provincia";
        $resultado = mysql_query($consulta, $conexion);
        $provincia=mysql_fetch_array($resultado);
		$provnombre=$provincia["denprovincia"];
		}
		echo $provnombre;
		?>      </td>
    </tr>
    <tr> 
      <td class="barraazul">Tel&eacute;fono:</td>
          <td><input name="telefono" type="text" id="telefono" size="10" maxlength="20" value="<? echo $telefono; ?>"></td
    ></tr>
    <tr> 
      <td class="barraazul">M&oacute;vil:</td>
          <td><input name="movil" type="text" id="movil" size="10" maxlength="20" value="<? echo $movil; ?>"></td
    ></tr>
    <tr> 
      <td class="barraazul">Correo electr&oacute;nico:</td>
      <td><input name="mail" type="text" id="mail" size="30" maxlength="60" value="<? echo $mail; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Comision:</td>
      <td><input name="comision" type="text" id="comision" size="5" maxlength="3" value="<? echo $comision; ?>">%      </td> 
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
         <option value="<? echo $nivela; ?>" selected><? echo $nivel; ?></option>
             </select>        </td>
    </tr></td>
    </tr>
		 <tr>
		   <td width="30%" class="barraazul">
		     Diseño del Programa:		   </td>
		   <td width="70%"><select name="entrada">
         <? if (file_exists ($os)) {
         ?>
         <option value="os" selected>Os</option>
         <option value="clasico">Clasico</option>
		 <? } else { ?>
         <option value="clasico">Clasico</option> 
         <? }
		 if (file_exists ($tpv)) {
		 ?>
         <option value="tpv" selected>Tpv</option>
         <? } ?>
         <option value="<? echo $entrada; ?>" selected><? echo $entrada; ?></option>
             </select>		  </td>
		 </tr>
           <?  // si tenemos factusyn con entorno chachi lo muestro si no kk
	   if (file_exists ($os)) {
	   ?>    
        <tr>
		   <td width="30%" class="barraazul">
		     Mostrar Dock:		   </td>
	      <td width="70%">  
         <select name="dock">
         <option value="1">Si</option>
         <option value="0">No</option>
         <option value="<? echo $docki; ?>" selected><? echo $dock; ?></option>
         </select>       </td>
    </tr>
         <tr>
		   <td width="30%" class="barraazul">
		     Decoracion Ventanas:		   </td>
		   <td width="70%">
		 <select name="ventanas">
         <option value="vista_glass">Vista Cristal</option>
         <option value="vista_normal">Vista Guarro</option>
         <option value="os_x">Mac Os X</option>
         <option value="alphacube">Blanco</option>
         <option value="spread">Verde</option>
         <option value="<? echo $ventanas; ?>" selected><? echo $ventana; ?></option>
         </select>		  </td>
		 </tr>
         <? } ?>
     <tr> 
      <td valign="top" class="barraazul">Observaciones:</td>
      <td><input name="observaciones" type="text" id="observaciones" size="50" maxlength="160" value="<? echo $observaciones; ?>"></td>
    </tr>
    <tr>
	  <td height="67" class="barraazul">
	    Foto de Trabajador</td>
	  <td>
	    <input type="file" name="foto">	  </td>
	</tr>
</table>
<? include ("../efectos/cuadrobajo.php"); ?>  
	
</body>
  <? 
 @mysql_free_result($resultado);
  ?>
</html>
 
   <p></p>
     <div align="center">
       <input type="hidden" name="cod" value="<? echo $cod; ?>">
       <input type="submit" name="Submit2" value="Guardar Cambios"> 
     </div>
   </form>
</body>
</html>