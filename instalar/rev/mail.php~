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
.Estilo1 {color: #FF0000}
-->
</style>
</head>
<?php  include ("../configuraciones/conectar.php");  ?>
<body>
 
<?php  if ($ini=="1") {
  include ("grabar_mail.php"); ?>
  <?php  exit; }
?>
   
</div>

<form name="form1" method="post" action="mail.php" enctype="multipart/form-data">

<?php  $consulta = "Select * from mail";
   $resultado = mysql_query($consulta, $conexion);
   $lafila=mysql_fetch_array($resultado);   
?>

<?php  if ($errores<>"") {?>
<center>
    <font color="ff0000"> </font>
       
    <br>
  </center>
<?php  } ?> 
  <center>
  </center> <br>
<br>
<?php 
$dato=("Servidor de Correo");
 include ("../efectos/cuadroalto.php");
?>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="rayas">
    <tr> 
	 <td width="18%" class="barraazul">Forma De Envio: <span class="Estilo1"></span> </td>
      <td width="41%" class="rayitas">
       <select name="forenvio" value="<?php  echo $lafila["forenvio"]; ?>">
         <option value="sendmail">Sendmail</option>
         <option value="smtp">Smtp</option>
         <option value="mail">Mail</option>
      </select> </td>
    </tr>
    <tr> 
      <td class="barraazul">Asunto:</td>
      <td class="rayitas"><input name="asunto" type="text" id="asunto" size="100" maxlength="100" value="<?php  echo $lafila["asunto"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Texto:</td>
      <td class="rayitas"><input name="texto" type="text" id="texto" size="100" maxlength="200" value="<?php  echo $lafila["texto"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">host: </td>
      <td class="rayitas"><input name="host" type="text" id="host" size="60" maxlength="60" value="<?php  echo $lafila["host"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">&iquest;Autentificacion necesaria?</td>
      <td width="41%" class="rayitas">
       <select name="autentifica" value="<?php  echo $lafila["autentifica"]; ?>">
         <option value="true">Si</option>
         <option value="false">No</option>
      </select> </td>
    </tr>
    <tr> 
      <td class="barraazul">Usuario:</td>
      <td class="rayitas"><input name="usuario" type="text" id="usuario" size="70" maxlength="70" value="<?php  echo $lafila["usuario"]; ?>"></td>
    </tr>
    <tr>
      <td class="barraazul">Contrase&ntilde;a:</td>
      <td class="rayitas"><input name="contrasena" type="password" id="contrasena" size="20" maxlength="20" value="<?php  echo $lafila["contrasena"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Nombre para enviar :</td>
      <td class="rayitas"><input name="nombre" type="text" id="nombre" size="70" maxlength="70" value="<?php  echo $lafila["nombre"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">Tiempo de espera:</td>
      <td class="rayitas"><input name="espera" type="text" id="espera" size="12" maxlength="12" value="<?php  echo $lafila["espera"]; ?>"></td>
    </tr>
    <tr> 
      <td class="barraazul">direccion interna Email:</td>
      <td class="rayitas"><input name="email" type="text" id="email" size="70" maxlength="70" value="<?php  echo $lafila["email"]; ?>"></td>
    </tr>
  </table>
  
<?php  include ("../efectos/cuadrobajo.php"); ?>  

   <div align="center"><br>
          <input type="submit" name="Submit" value="Modificar datos del servidor email">
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
