<?php 
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

	Fecha Liberaci�n del c�digo: 25/10/2007
	Factusyn 2007 -- Murcia	 
	
	*/
	
?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo2 {color: #FF0000}
-->
</style>
</head>
<?php  include ("../configuraciones/conectar.php"); ?>
<body>
<br>

<?php  if ($ini=="1") {
include ("grabar_factura.php"); ?>
  <?php  exit; } 
?>
</div>

<form name="form1" method="post" action="factura.php" enctype="multipart/form-data">

  <div align="center">
    <p><br>
    Si ya tiene empezado el a&ntilde;o con otro programa y quiere que la primera factura de factusyn continue con la numeracion de su programa escriba aqui el ultimo numero de factura de su anterior programa. <span class="Estilo2">( el numero de la primera factura de Factusyn sera el siguiente de el que escriba aqui. ) </span></p>
    <p><br>
      </p>
  </div>
  <?php 
$dato=("Insertar Numero Factura");
 include ("../efectos/cuadroalto.php");
?>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="metal">
	<tr> 
      <td colspan="2" class="barraroja"><p>Configuracion Numero Inicio Factura </p></td>
    </tr>
	<tr>
      <td width="18%" class="barraazul">Numero Primera Factura </td>
      <td width="41%"><input name="factunum" type="text" id="factunum" size="10" maxlength="10"></td>
    </tr>
  </table>
<?php  include ("../efectos/cuadrobajo.php"); ?>  
    <div align="center"><br>
          <input type="submit" name="Submit" value="Memorizar Numero">
          <input type="hidden" name="ini" value="1">
          <br>
          <br>
  </div>

</form>

</body>
