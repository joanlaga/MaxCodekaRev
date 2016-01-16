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
	
	Autores: Luis Ignacio Albacete
	
	Fecha Liberaci�n del c�digo: 15/10/2007
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
		  
$dato=("Ficha Usuario");
include ("../efectos/cuadroalto.php"); 
?>
  </div>
  <table border="0" align="center" cellpadding="0" cellspacing="0" class="rayas">
    <tr> 
      <td width="30%" class="barraazul">Nombre y apellidos:</td>
      <td width="70%"><?=$nombre?>
      </td>
      <td width="10%" rowspan="7">
      <? //si tiene imagen la muestro y si no saco al gordo feo
		if (empty($foto)) { $foto="gordo.png"; }
		?>
    <img src="../imagenes/trabajadores/<?=$foto?>" width="100" height="100" border="1"><br>
    </td>
    </tr>
    <tr> 
      <td class="barraazul">CIF/NIF:</td>
    
      <td><?=$dni?></td>
      <td width="50"></td>
    </tr>	
    <tr> 
      <td class="barraazul">Direcci�n:</td>
    
      <td><?=$direccion?></td>
      <td width="50"></td>
    </tr>
    <tr> 
      <td class="barraazul">Localidad:</td>
      
      <td><?=$localidad?></td>
      <td width="50"></td>
    </tr>
    <tr> 
      <td class="barraazul">C�digo postal:</td>
    
      <td><?=$cp?></td>
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
		?>
      </td>
    </tr>
    <tr> 
      <td class="barraazul">Tel&eacute;fono:</td>
          <td><?=$telefono?></td
    ></tr>
    <tr> 
      <td class="barraazul">M&oacute;vil:</td>
          <td><?=$movil?></td
    ></tr>
    <tr> 
      <td class="barraazul">Correo electr&oacute;nico:</td>
      <td><?=$mail?></td>
    </tr>
    <tr> 
      <td class="barraazul">Comision:</td>
      <td><?=$comision?>%
      </td> 
    </tr>
	    <tr>
		   <td width="30%" class="barraazul">
		     Acceso:		   </td>
		   <td width="70%"><?=$nivel?></td>
    </tr>
		 <tr>
		   <td width="30%" class="barraazul">
		     Dise�o del Programa:		   </td>
		   <td width="70%"><?=$entrada?></td>
		 </tr>
           <?  // si tenemos factusyn con entorno chachi lo muestro si no kk
	   if (file_exists ($os)) {
	   ?>    
        <tr>
		   <td width="30%" class="barraazul">
		     Mostrar Dock:		   </td>
	      <td width="70%"><?=$dock?></td>
    </tr>
         <tr>
		   <td width="30%" class="barraazul">
		     Decoracion Ventanas:		   </td>
		   <td width="70%"><?=$ventana?></td>
		 </tr>
         <? } ?>
         <tr>
		   <td width="30%" class="barraazul">
	       <div align="left">Nombre Usuario:		   </div></td>
		   <td width="70%"><span class="Estilo1"><?=$usuario?></span></td>
    </tr>
     <tr> 
      <td valign="top" class="barraazul">Observaciones:</td>
      <td><?=$observaciones?></td>
    </tr>
</table>
<? include ("../efectos/cuadrobajo.php"); ?>  
	
</body>
  <? 
 @mysql_free_result($resultado);
  ?>
</html>
 
   <p></p>
   <form name="form2" method="post" action="usuarios.php">
     <div align="center">
       <input type="submit" name="Submit2" value="Volver"> 
     </div>
   </form>
</body>
</html>