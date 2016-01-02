<?
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
	
		Autores: Galopin
		     Pedro Obregón Mejías
			 Rubén D. Mancera Morán
			 	 Factusyn
			 Luis Ignacio Albacete

	Fecha Liberación del código: 25/10/2007
	Factusyn 2007 -- Murcia	 
	
	*/
	
?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {
	font-size: 0.9em;
	color: #009933;
}
-->
</style>
</head>
<? include ("../configuraciones/conectar.php"); ?>
<body>
<br>

<? if ($ini=="1") {
include ("grabar_modificar_docpresupuesto.php"); ?>
  <? exit; } 
?>
</div>

<form name="form1" method="post" action="modificar_docpresupuesto.php" enctype="multipart/form-data">

<? $consulta = "Select * from docpresupuesto";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   

$color=$lafila["color"];

if ($color=="") { 
$colo=azu;
$consulta = "INSERT INTO docpresupuesto (`color`) 
VALUES ('$colo')";
$resultado = mysql_query($consulta, $conexion);
}
?>

 <br>
<br>
<?
$dato=("Modificar Diseño Presupuesto");
 include ("../efectos/cuadroalto.php");
?>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="rayas">
    <tr> 
	 <td width="18%" class="barraazul">Color Presupuesto:</td>
     <td width="41%"><select name="color" value="<? echo $lafila["color"]; ?>">
       <option value="azul">Azul</option>
       <option value="rojo">rojo</option>
       <option value="amarillo">amarillo</option>
	   <option value="verde">Verde</option>
	   <option value="marron">Marron</option>
	   <option value="violeta">Violeta</option>
	   <option value="rosa">Rosa</option>
	   <option value="naranja">Naranja</option>
	   <option value="blanco">Blanco</option>
	   <option value="gris">Gris</option>
     </select></td>
    </tr>
	<tr> 
      <td colspan="2" class="barraroja"><p>Marca Agua:</p></td>
    </tr>
    <tr>
      <td height="67" class="barraazul"><div align="justify">Marca de agua: </div></td>
      <td><input type="file" name="foto"></td>
    </tr>
	<tr> 
      <td class="barraazul"><p>Posicion Vertical Marca agua:</p>      </td>
      <td><input name="marcaguay" type="text" id="marcaguay" size="10" maxlength="10" value="<? echo $lafila["marcaguay"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Posicion Horizontal Marca agua:</td>
      <td><input name="marcaguax" type="text" id="marcaguax" size="10" maxlength="10" value="<? echo $lafila["marcaguax"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Tama&ntilde;o Marca Agua </td>
      <td><input name="marcaguatam" type="text" id="marcaguatam" size="10" maxlength="10" value="<? echo $lafila["marcaguatam"]; ?>"></td>
    </tr>
	<tr> 
      <td colspan="2" class="barraroja"><p>Logotipo:</p></td>
    </tr>
	<tr> 
	 <td width="18%" class="barraazul">Mostrar logotipo?:</td>
     <td width="41%"><select name="logo" value="<? echo $lafila["logo"]; ?>">
       <option value="logo">Si</option>
       <option value="blanco">No</option>
     </select></td>
    </tr>
	      <td class="barraazul">Tama&ntilde;o Logotipo </td>
            <td><input name="tamanologo" type="text" id="tamanologo" size="10" maxlength="10" value="<? echo $lafila["tamanologo"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Posicion Vertical Logotipo :</td>
      <td><input name="logoy" type="text" id="logoy" size="10" maxlength="10" value="<? echo $lafila["logoy"]; ?>"></td>
    </tr>
    <tr>
      <td class="barraazul">Posicion Horizontal Logotipo :</td>
      <td><input name="logox" type="text" id="logox" size="10" maxlength="10" value="<? echo $lafila["logox"]; ?>"></td>
    </tr>
	<tr> 
      <td colspan="2" class="barraroja"><p>Pie de Pagina :</p></td>
    </tr>
	<tr>
      <td class="barraazul">Condiciones de venta  :</td>
      <td><input name="condiciones" type="text" id="condiciones" size="80" maxlength="190" value="<? echo $lafila["condiciones"]; ?>"></td>
    </tr>
	<tr>
      <td class="barraazul">Condiciones Fuente:</td>
      <td><select name="condifont" value="<? echo $lafila["condifont"]; ?>">
       <option value="arial">Arial</option>
       <option value="helvetica">Helvetica</option>
       <option value="helveticab">HelveticaB</option>
	   <option value="symbol">Symbol</option>
	   <option value="times">Times</option>
	   <option value="timesb">TimesB</option>
	   <option value="courier">Courier</option>
     </select></td>
    </tr>
	<tr>
      <td class="barraazul">Condiciones Tama&ntilde;o Fuente:</td>
      <td><input name="conditam" type="text" id="conditam" size="10" maxlength="10" value="<? echo $lafila["conditam"]; ?>"></td>
    </tr>
	<tr>
      <td class="barraazul">Moneda:</td>
      <td><input name="moneda" type="text" id="moneda" size="10" maxlength="10" value="<? echo $lafila["moneda"]; ?>"></td>
    </tr>
	<tr>
      <td class="barraazul">Nombre Impuestos:</td>
      <td><input name="impuestos" type="text" id="impuestos" size="10" maxlength="10" value="<? echo $lafila["impuestos"]; ?>"></td>
    </tr>
  </table>
<?
 include ("../efectos/cuadrobajo.php");
?>
		<div align="center"><br>
          <input type="submit" name="Submit" value="Modificar Diseño de Presupuesto">
          <input type="hidden" name="ini" value="1">
          <br>
          <br>
        </div>
</form>

</body>
  <? 
    @mysql_free_result($resultado);
?>