<link href="../estilo.css" rel="stylesheet" type="text/css">	
<?
require("../aut_verifica.inc.php"); // incluir motor de autentificación.
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

	Fecha Liberación del código: 07/10/2007
	Factusyn 2007 -- Murcia	 
	*/
	
include ("../conectar.php");
$consulta = "DELETE FROM tiendarecu where id='$cod'";
$resultado = mysql_query($consulta, $conexion);

                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logomensaje.jpg";
                  $cabecera="tienda.png";
                  $texto="Recuerda Eliminada Perfectamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="laterales.php";
                  $valuev="Administración de Tienda";
                  include ("../mensaje.php");	
?>