<link href="../css/estilo.css" rel="stylesheet" type="text/css">
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
	
	Luis Ignacio Albacete

	Fecha Liberación del código: 01/01/2008
	Factusyn 2008 -- Murcia	
	
	
	*/
	
include ("../configuraciones/conectar.php");

$consulta = "UPDATE `operarios` SET codoperario='$cod' , nombre='$nombre' , nif='$nif' , direccion='$direccion' , localidad='$localidad' , cp='$cp' , provincia='$provincia' , telefono='$telefono' , movil='$movil' , mail='$correo' , comision='$comision' , observaciones='$observaciones' WHERE codoperario='$cod'";
$resultado = mysql_query($consulta, $conexion);

$consulta = "UPDATE `user_list` SET nivel_acceso='$nivel' , ventanas='$ventanas' , dock='$dock' , entrada='$entrada' , WHERE id='$cod'";
$resultado = mysql_query($consulta, $conexion);

                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logo.jpg";
                  $cabecera="operario.png";
                  $texto="Usuario insertado correctamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="usuarios.php";
                  $valuev="Administración de Usuarios";
                  include ("../configuraciones/mensaje.php");		
?>				
