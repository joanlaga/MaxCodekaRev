<link href="../css/estilo.css" rel="stylesheet" type="text/css">	
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
	
	Fecha Liberaci�n del c�digo: 25/10/2007
	Factusyn 2007 -- Murcia		 
	
	*/

include ("../configuraciones/conectar.php");

$consulta="delete  from mail";
$resultado=mysql_query($consulta,$conexion);

$consulta = "INSERT INTO mail (`autentifica` , `asunto`, `texto` , `host` , `usuario` , `forenvio` , `contrasena` , `nombre` , `espera` , `email`) 
VALUES ('$autentifica', '$asunto' , '$texto' , '$host', '$usuario' , '$forenvio', '$contrasena' , '$nombre', '$espera' , '$email')";
$resultado = mysql_query($consulta, $conexion);



                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logo.jpg";
                  $cabecera="mail.png";
                  $texto="Servidor Correo modificado correctamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="factura.php";
                  $valuev="Conf. Numero Factura";
                  include ("../configuraciones/mensaje.php");		
?>				  