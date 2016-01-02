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

	Fecha Liberaci�n del c�digo: 10/01/2007
	Factusyn 2007 -- Murcia	 
	
	*/
	
?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo2 {font-size: 1em}
-->
</style>
</head>
<?php  include ("../configuraciones/conectar.php"); ?>
<body>
<br>

<?php  if ($ini=="1") {
  include ("../empresa/empresacontrolerrores.php");
  if (empty($errores)) { include ("grabar_empresa.php"); ?>
  <?php  exit; } }
?>
</div>

<form name="form1" method="post" action="empresa.php" enctype="multipart/form-data">

<?php  $consulta = "Select * from empresa";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
?>

<?php  if ($errores<>"") {?>
<center>
    <font color="ff0000"> </font>
    <table width="85%" border="1">
      <tr>
        <td><div align="left"><font size="+1">Errores:</font><font color="ff0000"><?php  print $errores; ?></font></div></td>
      </tr>
    </table>
   
    <br>
  </center>
<?php  } ?> 
  <center>
<table width="85%" border="1">
      <tr>
        <td><div align="left">
          <p align="center"><font size="+1">Aqui Insertamos los datos de nuestra empresa y nuestro logo. </font></p>
          <p align="center"><font size="+1">Los campos marcados con * son obligatorios </font></p>
        </div></td>
      </tr>
    </table>
  </center> <br>
<br>
<?php 
$dato=("Insertar Empresa");
 include ("../efectos/cuadroalto.php");
?>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="rayitas">
    <tr> 
	 <td width="18%" class="barraazul Estilo2">Nombre de la Empresa:</td>
     <td width="41%"><input name="nombre" type="text" id="nombre" size="50" maxlength="50" value="<?php  echo $lafila["nombre"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">CIF/NIF (*):</td>
      <td><input name="cif" type="text" id="nif" size="14" maxlength="14" value="<?php  echo $lafila["cif"]; ?>">
       <input name="verifica" type="checkbox" id="verifica" value="no">
      No Validar</label></td></tr>
	<tr> 
      <td class="barraazul"><p class="Estilo2">Registro Mercantil:</p>      </td>
      <td><input name="registro" type="text" id="registro" size="84" maxlength="114" value="<?php  echo $lafila["registro"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">Direcci�n (*):</td>
      <td><input name="direccion" type="text" id="direccion" size="40" maxlength="40" value="<?php  echo $lafila["direccion"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">Localidad (*):</td>
      <td><input name="localidad" type="text" id="localidad" size="30" maxlength="30" value="<?php  echo $lafila["localidad"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">Provincia (*):</td>
      <td> <select name="provincia">
          <option selected> 
          <?php 
        $consulta0 = "Select * from provincias order by denprovincia";
        $resultado0 = mysql_query($consulta0, $conexion);
        $lafila0=mysql_fetch_array($resultado0);
        do
          {
            if ($lafila0["codprovincia"]==$lafila["codprovincia"]) { ?>
          <option selected value="<?php  echo $lafila0["codprovincia"] ?>"> <?php  echo $lafila0["denprovincia"];
				   } else { ?> 
          <option value="<?php  echo $lafila0["codprovincia"] ?>"> <?php  echo $lafila0["denprovincia"]; } ?>          </option>
          <?php  }
               while ($lafila0=mysql_fetch_array($resultado0)); ?>
        </select>      </td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">C�digo postal (*):</td>
      <td><input name="cp" type="text" id="cp" size="5" maxlength="5" value="<?php  echo $lafila["cp"]; ?>"></td>
    </tr>
    <tr>
      <td class="barraazul Estilo2">Tel&eacute;fono (*):</td>
      <td><input name="telefono" type="text" id="telefono" size="12" maxlength="12" value="<?php  echo $lafila["telefono"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">Fax:</td>
      <td><input name="fax" type="text" id="fax" size="12" maxlength="12" value="<?php  echo $lafila["fax"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">M&oacute;vil (*):</td>
      <td><input name="movil" type="text" id="movil2" size="12" maxlength="12" value="<?php  echo $lafila["movil"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">Web:</td>
      <td><input name="web" type="text" id="web" size="30" maxlength="30" value="<?php  echo $lafila["web"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul Estilo2">Correo electr&oacute;nico:</td>
      <td><input name="email" type="text" id="correo" size="50" maxlength="50" value="<?php  echo $lafila["email"]; ?>"></td>
    </tr>
	<tr> 
      <td class="barraazul Estilo2">Numero de cuenta :</td>
      <td><input name="cuentabanc" type="text" id="cuentabanc" size="25" maxlength="25" value="<?php  echo $lafila["cuentabanc"]; ?>"></td>
    </tr>
	<tr>
	  <td height="67" class="barraazul"> <div align="justify" class="Estilo2">Logotipo 
          de la empresa  <font color="#FF0000">(El Formato tiene que ser jpg o png 8 si no no se podria generar el pdf de la factura)</font>: </div></td>
	  <td>
	    <input type="file" name="foto">	  </td>
	</tr>
  </table>
<?php 
 include ("../efectos/cuadrobajo.php");
?>		
		<div align="center"><br>
          <input type="submit" name="Submit" value="Modificar los datos de la Empresa">
          <input type="hidden" name="errores" value="<?php  echo $errores; ?>">
          <input type="hidden" name="ini" value="1">
          <br>
          <br>
        </div>

  
</form>

</body>
  <?php  
    @mysql_free_result($resultado);
    @mysql_free_result($resultado0);
  ?>
</html>
