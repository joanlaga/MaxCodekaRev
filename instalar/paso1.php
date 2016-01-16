<?php  
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
			 Pedro Obregï¿½n Mejï¿½as
			 Rubï¿½n D. Mancera Morï¿½n
	
	Fecha Liberaciï¿½n del cï¿½digo: 09/05/2008
	Factusyn 2008 -- Murcia		 


// Variables para la conexión para la base de datos Mysql
global $Usuario;        
global $Password;     
global $Servidor;       
global $BaseDeDatos;

$Usuario="root";					// Nombre de usuario de la base de datos
$Password="aldico";				// Contraseña de la base de datos
$Servidor="localhost";			// Servidor , generalmente localhost
$BaseDeDatos="maxcodeka";		// Nombre de la base de datos

$sql_tabla="user_list";			// tabla de los usuario
$Passwordtabla ="margarita";	// Password del administrador 
$usuarios_sesion="factu";		// sesion
	
	*/

global $DBhostname;
global $DBusername;
global $DBpassword;
global $DBname;
	
	
if (file_exists( "../configuraciones/config.php" ) && filesize("../configuraciones/config.php") > 0.5) {
	echo "Se encontró el archivo config.php </br>";
	echo "En éste archivo se guardan las configuraciones para acceder a su base de datos</br>";
	echo "Debe tener permisos de lectura escritura </br>";	
	
	require_once("../configuraciones/config.php");

//	header( "Location: index.php" );

//	exit();
} else {
	echo "NO Se encontró el archivo /configuraciones/config.php </br>";
	echo "En éste archivo se guardan las configuraciones para acceder a su base de datos</br>";
	echo "Debe tener permisos de lectura escritura </br>";	
}
 ?>

<html>
<head>
<title>MaxCodekaRev instalación</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="paso2.php" method="post" name="form" id="form">

<table width="800" height="600" border="0" align="center" >
  <tr>
    <td><table width="609" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
              <tr> 
                <td colspan="2"> <p><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Para usar MaxCodekaRev , debemos tener configurada la conexi&oacute;n con la base de datos en MySQL.<br />
                    <br />
                    </font></p></td>
              </tr>
              <tr> 
                <td width="35%"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Servidor de Base de Datos Msql</font></td>
                <td width="65%" align="left"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                  <input class="inputbox" type="text" name="DBhostname" value="<?php echo $Servidor ; ?>"/>
                  </font></td>
              </tr>
              <tr> 
                <td><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Usuario MySQL</font></td>
                <td align="left"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                  <input name="DBusername" type="text" class="inputbox" id="DBusername" value="<?php echo $Usuario ; ?>"/>
                  </font></td>
              </tr>
              <tr> 
                <td><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Contrase&ntilde;a 
                  MySQL</font></td>
                <td align="left"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                  <input class="inputbox" type="text" name="DBpassword" value="<?php echo $Password ; ?>"/>
                  </font></td>
              </tr>
              <tr> 
                <td><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nombre de la Base de Datos MySQL</font></td>
                <td align="left"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                  <input class="inputbox" type="text" name="DBname" value="<?php echo $BaseDeDatos ; ?>"/>
                  </font></td>
              </tr>

              <tr> 

                <td height="43" colspan="2" align="right"> <div align="center"><font color="#000000"><br />
                    <input class="button" type="submit" name="next" value="Siguiente" />
                    </font></div></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <p></p>
</td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
      </blockquote></td>
  </tr>
</table>

</body>
</html>
