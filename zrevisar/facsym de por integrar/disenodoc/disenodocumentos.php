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
<script src="../efectos/SpryTabbedPanels.js" type="text/javascript"></script>
</head>
<body>
<? include ("../configuraciones/conectar.php");  ?>
<br>
   <?
 $dato=("Diseño Documentos");
 include ("../efectos/cuadroalto.php");
 ?>
  <table width="85%" align="center" class="rayas">
  <tr>
    <td>
    <p></p>
      <div align="center"></div>
  <div align="center">
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Comunes</li>
        <li class="TabbedPanelsTab" tabindex="1">Partes</li>
        <li class="TabbedPanelsTab" tabindex="2">Albaranes</li>
        <li class="TabbedPanelsTab" tabindex="3">Facturas</li>
        <li class="TabbedPanelsTab" tabindex="4">Presupuestos</li>
        <li class="TabbedPanelsTab" tabindex="5">Listados</li>
        </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <p><font color="#FF0000">Este Apartado de factusyn es para cambiar a la vez todos los dise&ntilde;os de sus documentos. </font></p>
          <p><font color="#FF0000">Si ya tiene dise&ntilde;ado algun documento se van a perder los cambios realizados en el.</font></p>
          <p><font color="#FF0000">Hay algunos datos que se tienen que configurar especificamente en su apartado especifico. </font><br>
              <br>
            Para ello Pulse el bot&oacute;n inferior &quot;Modificar Dise&ntilde;o &quot;.</p>
        
        <br>
<form action="modificar_docomun.php" method="post" >
  <div align="center">
    <input type="submit" name="Modificar datos de Dise&ntilde;o" value="Modificar Dise&ntilde;o">
  </div>
</form>
        </div>
        
        <div class="TabbedPanelsContent">
<? 
   $consulta = "Select * from docparte";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
   
   $filas=mysql_num_rows($resultado);
   if ($filas<>0)
     {
?>
    </p>
    <div align="center"><strong>Dise&ntilde;o de Parte </strong><font color="#FF0000"><b></b></font>      </p>
</div>
  <table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" class="metal">
<tr> 
    <td width="18%" class="barraroja"><strong>Color Parte: </strong></td>
    <td width="82%"><font color="#FF0000"><b><? echo $lafila["color"]; ?></b></font></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Marca Agua </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja">Posicion Vertical fon </td>
    <td><? echo $lafila["marcaguay"]; ?></td>
  </tr>
  <tr>
  <td class="barraroja">Posicion Horizontal fon </td>
    <td><? echo $lafila["marcaguax"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Marca Agua </strong></td>
    <td><? echo $lafila["marcaguatam"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Logotipo </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Logotipo:</strong></td>
    <td><? echo $lafila["tamanologo"]; ?></td>
  </tr>
  
  <tr> 
    <td class="barraroja"><strong>Posicion Ver. Logo:</strong></td>
    <td><? echo $lafila["logoy"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion Hor. Logo:</strong></td>
    <td><? echo $lafila["logox"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Textos </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Condiciones de venta:</strong></td>
    <td><? echo $lafila["condiciones"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Fuente condiciones:</strong></td>
    <td><? echo $lafila["condifont"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o fuen. Cond:</strong></td>
    <td><? echo $lafila["conditam"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Moneda:</strong></td>
    <td><? echo $lafila["moneda"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Impuestos:</strong></td>
    <td><? echo $lafila["impuestos"]; ?></td>
  </tr>
</table>
<div align="center"><br>
</div>

<? }
  else
  {
?>
<table width="85%" border="1" align="center">
  <tr>
    <td><div align="center"><font color="#FF0000">No existen Diseño de Parte en la Base de Datos. Por favor introduzcalos para que los documentos que 
        genere la aplicaci&oacute;n est&eacute;n configurados correctamente.</font><br>
        <br>
        Para ello Pulse el bot&oacute;n inferior &quot;Modificar Parte &quot;.</div></td>
  </tr>
</table>
<br>
<?	
  }
?>
<form action="modificar_docparte.php" method="post" >
  <div align="center">
    <input type="submit" name="Modificar datos de Parte" value="Modificar Parte">
  </div>
</form>
        </div>
        <div class="TabbedPanelsContent">
<? 
   $consulta = "Select * from docalbaran";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
   
   $filas=mysql_num_rows($resultado);
   if ($filas<>0)
     {
?>
     <div align="center">  Diseño de <? echo $lafila["albaran"]; ?> </div>
<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" class="metal">
<tr> 
    <td width="18%" class="barraroja"><strong>Color Albaran: </strong></td>
    <td width="82%"><font color="#FF0000"><b><? echo $lafila["color"]; ?></b></font></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Marca Agua </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja">Posicion Vertical fon </td>
    <td><? echo $lafila["marcaguay"]; ?></td>
  </tr>
  <tr>
  <td class="barraroja">Posicion Horizontal fon </td>
    <td><? echo $lafila["marcaguax"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Marca Agua </strong></td>
    <td><? echo $lafila["marcaguatam"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Logotipo </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Logotipo:</strong></td>
    <td><? echo $lafila["tamanologo"]; ?></td>
  </tr>
  
  <tr> 
    <td class="barraroja"><strong>Posicion Ver. Logo:</strong></td>
    <td><? echo $lafila["logoy"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion Hor. Logo:</strong></td>
    <td><? echo $lafila["logox"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Textos </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Condiciones de venta:</strong></td>
    <td><? echo $lafila["condiciones"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Fuente condiciones:</strong></td>
    <td><? echo $lafila["condifont"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o fuen. Cond:</strong></td>
    <td><? echo $lafila["conditam"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Moneda:</strong></td>
    <td><? echo $lafila["moneda"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Impuestos:</strong></td>
    <td><? echo $lafila["impuestos"]; ?></td>
  </tr>
</table>
<div align="center"><br>
</div>

<? }
  else
  {
?>
<table width="85%" border="1" align="center">
  <tr>
    <td><div align="center"><font color="#FF0000">No existen Diseño de Albaran en la Base de Datos. Por favor introduzcalos para que los documentos que 
        genere la aplicaci&oacute;n est&eacute;n configurados correctamente.</font><br>
        <br>
        Para ello Pulse el bot&oacute;n inferior &quot;Modificar Albaran &quot;.</div></td>
  </tr>
</table>
<br>
<?	
  }
?>
<form action="modificar_docalbaran.php" method="post" >
  <div align="center">
    <input type="submit" name="Modificar datos de Albaran" value="Modificar Albaran">
  </div>
</form>
        </div>
        
        <div class="TabbedPanelsContent">
<? $consulta = "Select * from docfactura";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
   
   $filas=mysql_num_rows($resultado);
   if ($filas<>0)
     {
?>
    
</p>
  <div align="center">Dise&ntilde;o Factura </div>
<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" class="metal">
  <tr> 
    <td width="18%" class="barraroja"><strong>Color Factura: </strong></td>
    <td width="82%"><font color="#FF0000"><b><? echo $lafila["color"]; ?></b></font></td>
  </tr>
  <tr> 
    <td class="barraroja">Posicion Vertical fon </td>
    <td><? echo $lafila["marcaguay"]; ?></td>
  </tr>
  <tr>
  <td class="barraroja">Posicion Horizontal fon </td>
    <td><? echo $lafila["marcaguax"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Marca Agua </strong></td>
    <td><? echo $lafila["marcaguatam"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Logotipo:</strong></td>
    <td><? echo $lafila["tamanologo"]; ?></td>
  </tr>
  <tr> 
  
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion Ver. Logo:</strong></td>
    <td><? echo $lafila["logoy"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion Hor. Logo:</strong></td>
    <td><? echo $lafila["logox"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Condiciones de venta:</strong></td>
    <td><? echo $lafila["condiciones"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Fuente condiciones:</strong></td>
    <td><? echo $lafila["condifont"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o fuen. Cond:</strong></td>
    <td><? echo $lafila["conditam"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Moneda:</strong></td>
    <td><? echo $lafila["moneda"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Impuestos:</strong></td>
    <td><? echo $lafila["impuestos"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion de registro :</strong></td>
    <td><? echo $lafila["registropos"]; ?></td>
  </tr>
</table>
<div align="center"><br>
</div>

<? }
  else
  {
?>
<table width="85%" border="1" align="center">
  <tr>
    <td><div align="center"><font color="#FF0000">No existen datos de su Factura en la Base de Datos. Por favor introduzcalos para que los documentos que 
        genere la aplicaci&oacute;n est&eacute;n configurados correctamente.</font><br>
        <br>
        Para ello Pulse el bot&oacute;n inferior &quot;Modificar Factura &quot;.</div></td>
  </tr>
</table>
<br>
<?	
  }
?>
<form action="modificar_docfactura.php" method="post" >
  <div align="center">
    <input type="submit" name="Modificar datos de Factura" value="Modificar Factura">
  </div>
</form>
        </div>
       
        <div class="TabbedPanelsContent">
<?  
   $consulta = "Select * from docpresupuesto";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
   
   $filas=mysql_num_rows($resultado);
   if ($filas<>0)
     {
?>

  <div align="center">Dise&ntilde;o de Presupuestos</div>
<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" class="metal">

<tr> 
    <td width="18%" class="barraroja"><strong>Color Presupuesto: </strong></td>
    <td width="82%"><font color="#FF0000"><b><? echo $lafila["color"]; ?></b></font></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Marca Agua </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja">Posicion Vertical fon </td>
    <td><? echo $lafila["marcaguay"]; ?></td>
  </tr>
  <tr>
  <td class="barraroja">Posicion Horizontal fon </td>
    <td><? echo $lafila["marcaguax"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Marca Agua </strong></td>
    <td><? echo $lafila["marcaguatam"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Logotipo </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Logotipo:</strong></td>
    <td><? echo $lafila["tamanologo"]; ?></td>
  </tr>
  
  <tr> 
    <td class="barraroja"><strong>Posicion Ver. Logo:</strong></td>
    <td><? echo $lafila["logoy"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion Hor. Logo:</strong></td>
    <td><? echo $lafila["logox"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Textos </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Condiciones de venta:</strong></td>
    <td><? echo $lafila["condiciones"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Fuente condiciones:</strong></td>
    <td><? echo $lafila["condifont"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o fuen. Cond:</strong></td>
    <td><? echo $lafila["conditam"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Moneda:</strong></td>
    <td><? echo $lafila["moneda"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Impuestos:</strong></td>
    <td><? echo $lafila["impuestos"]; ?></td>
  </tr>
</table>
<div align="center"><br>
</div>

<? }
  else
  {
?>
<table width="85%" border="1" align="center">
  <tr>
    <td><div align="center"><font color="#FF0000">No existen Diseño de Presupuesto en la Base de Datos. Por favor introduzcalos para que los documentos que 
        genere la aplicaci&oacute;n est&eacute;n configurados correctamente.</font><br>
        <br>
        Para ello Pulse el bot&oacute;n inferior &quot;Modificar Presupuesto &quot;.</div></td>
  </tr>
</table>
<br>
<?	
  }
?>
<form action="modificar_docpresupuesto.php" method="post" >
  <div align="center">
    <input type="submit" name="Modificar datos de Presupuesto" value="Modificar Presupuesto">
  </div>
</form>
        </div>
        <div class="TabbedPanelsContent">
<?
   $consulta = "Select * from doclistado";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
   
   $filas=mysql_num_rows($resultado);
   if ($filas<>0)
     {
?>
</p>
        <div align="center">          <strong>Dise&ntilde;o de Listados </strong><font color="#FF0000"><b></b></font>
          </div>
               
<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" class="metal">
<tr> 
    <td width="18%" class="barraroja"><strong>Color Listados: </strong></td>
    <td width="82%"><font color="#FF0000"><b><? echo $lafila["color"]; ?></b></font></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Marca Agua </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja">Posicion Vertical fon </td>
    <td><? echo $lafila["marcaguay"]; ?></td>
  </tr>
  <tr>
  <td class="barraroja">Posicion Horizontal fon </td>
    <td><? echo $lafila["marcaguax"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Marca Agua </strong></td>
    <td><? echo $lafila["marcaguatam"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Logotipo </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o Logotipo:</strong></td>
    <td><? echo $lafila["tamanologo"]; ?></td>
  </tr>
  
  <tr> 
    <td class="barraroja"><strong>Posicion Ver. Logo:</strong></td>
    <td><? echo $lafila["logoy"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Posicion Hor. Logo:</strong></td>
    <td><? echo $lafila["logox"]; ?></td>
  </tr>
  <tr class="barraroja"> 
    <td colspan="2" class="primeralinea"><div align="center"><strong>Textos </strong><font color="#FF0000"><b></b></font></div></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Pie de pagina:</strong></td>
    <td><? echo $lafila["condiciones"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Fuente Pie:</strong></td>
    <td><? echo $lafila["condifont"]; ?></td>
  </tr>
  <tr> 
    <td class="barraroja"><strong>Tama&ntilde;o fuen. Pie:</strong></td>
    <td><? echo $lafila["conditam"]; ?></td>
  </tr>
</table>
<div align="center"><br>
</div>

<? }
  else
  {
?>
<table width="85%" border="1" align="center">
  <tr>
    <td><div align="center"><font color="#FF0000">No existen Diseño de Listados en la Base de Datos. Por favor introduzcalos para que los documentos que 
        genere la aplicaci&oacute;n est&eacute;n configurados correctamente.</font><br>
        <br>
        Para ello Pulse el bot&oacute;n inferior &quot;Modificar Listados &quot;.</div></td>
  </tr>
</table>
<br>
<?	
  }
?>
<form action="modificar_doclistado.php" method="post" >
  <div align="center">
    <input type="submit" name="Modificar datos de Listados" value="Modificar Listados">
  </div>
</form>
        </div>
      </div>
    </div>
    <br>
</div>
    <div align="center">
      <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
   
<? include ("../efectos/cuadrobajo.php"); ?>

<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
  <? 
 @mysql_free_result($resultado);
 
  ?>
</html>
